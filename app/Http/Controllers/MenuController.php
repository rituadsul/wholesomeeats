<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * GET /api/menu
     * All categories with their available items
     */
    public function index(): JsonResponse
    {
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order')
            ->with(['activeMenuItems' => fn ($q) => $q->orderByDesc('is_bestseller')])
            ->get();

        return response()->json($categories);
    }

    /**
     * GET /api/menu/{slug}
     */
    public function show(string $slug): JsonResponse
    {
        $item = MenuItem::available()
            ->where('slug', $slug)
            ->with('category')
            ->firstOrFail();

        return response()->json($item);
    }

    /**
     * GET /api/menu/featured
     */
    public function featured(): JsonResponse
    {
        return response()->json(
            MenuItem::available()->featured()->with('category')->get()
        );
    }

    /**
     * GET /api/menu/bestsellers
     */
    public function bestsellers(): JsonResponse
    {
        return response()->json(
            MenuItem::available()->bestsellers()->with('category')->get()
        );
    }
}
