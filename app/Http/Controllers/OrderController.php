<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    /** GET /api/orders */
    public function index(Request $request): JsonResponse
    {
        $orders = Order::where('user_id', $request->user()->id)
            ->with('items')
            ->latest()
            ->paginate(10);

        return response()->json($orders);
    }

    /** POST /api/orders */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'items'                    => 'required|array|min:1',
            'items.*.menu_item_id'     => 'required|exists:menu_items,id',
            'items.*.quantity'         => 'required|integer|min:1|max:20',
            'items.*.customisation_notes' => 'nullable|string|max:255',
            'order_type'               => ['required', Rule::in(['dine_in', 'takeaway', 'delivery'])],
            'payment_method'           => ['required', Rule::in(['cash', 'upi', 'card', 'wallet'])],
            'delivery_address'         => 'required_if:order_type,delivery|nullable|string',
            'delivery_city'            => 'nullable|string',
            'delivery_pincode'         => 'nullable|string|max:10',
            'special_instructions'     => 'nullable|string|max:500',
        ]);

        return DB::transaction(function () use ($validated, $request) {
            $subtotal = 0;
            $lineItems = [];

            foreach ($validated['items'] as $line) {
                $menuItem = MenuItem::available()->findOrFail($line['menu_item_id']);
                $unitPrice  = $menuItem->effective_price;
                $totalPrice = $unitPrice * $line['quantity'];
                $subtotal  += $totalPrice;

                $lineItems[] = [
                    'menu_item_id'        => $menuItem->id,
                    'item_name'           => $menuItem->name,
                    'unit_price'          => $unitPrice,
                    'quantity'            => $line['quantity'],
                    'total_price'         => $totalPrice,
                    'customisation_notes' => $line['customisation_notes'] ?? null,
                ];
            }

            $gst           = round($subtotal * 0.05, 2);  // 5% GST
            $deliveryCharge = $validated['order_type'] === 'delivery' ? 30.00 : 0.00;
            $total          = $subtotal + $gst + $deliveryCharge;

            $order = Order::create([
                'order_number'      => Order::generateOrderNumber(),
                'user_id'           => $request->user()->id,
                'status'            => 'pending',
                'order_type'        => $validated['order_type'],
                'subtotal'          => $subtotal,
                'tax_amount'        => $gst,
                'delivery_charge'   => $deliveryCharge,
                'discount_amount'   => 0,
                'total_amount'      => $total,
                'payment_method'    => $validated['payment_method'],
                'payment_status'    => 'pending',
                'delivery_address'  => $validated['delivery_address'] ?? null,
                'delivery_city'     => $validated['delivery_city'] ?? 'Mumbai',
                'delivery_pincode'  => $validated['delivery_pincode'] ?? null,
                'special_instructions' => $validated['special_instructions'] ?? null,
                'outlet_number'     => '777196074',
                'estimated_delivery_at' => now()->addMinutes(35),
            ]);

            foreach ($lineItems as $li) {
                $order->items()->create($li);
            }

            return response()->json($order->load('items'), 201);
        });
    }

    /** GET /api/orders/{order} */
    public function show(Order $order, Request $request): JsonResponse
    {
        abort_if($order->user_id !== $request->user()->id && !$request->user()->isStaff(), 403);

        return response()->json($order->load('items.menuItem'));
    }

    /** PATCH /api/orders/{order}/cancel */
    public function cancel(Order $order, Request $request): JsonResponse
    {
        abort_if($order->user_id !== $request->user()->id, 403);
        abort_unless($order->isCancellable(), 422, 'Order cannot be cancelled at this stage.');

        $order->update(['status' => 'cancelled']);

        return response()->json(['message' => 'Order cancelled successfully.', 'order' => $order]);
    }
}
