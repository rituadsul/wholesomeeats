<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'        => 'Noodles & Pasta',
                'description' => 'Comforting bowls of pasta, ramen and noodle dishes',
                'sort_order'  => 1,
            ],
            [
                'name'        => 'Momos',
                'description' => 'Steamed and fried Tibetan dumplings with dips',
                'sort_order'  => 2,
            ],
            [
                'name'        => 'Snacks & Fries',
                'description' => 'Crispy fries, loaded snacks and finger foods',
                'sort_order'  => 3,
            ],
            [
                'name'        => 'Maggi & Quick Bites',
                'description' => 'Our famous Maggi preparations and quick bites',
                'sort_order'  => 4,
            ],
            [
                'name'        => 'Beverages',
                'description' => 'Refreshing drinks, lemonades and coffees',
                'sort_order'  => 5,
            ],
            [
                'name'        => 'Coffee & Hot Drinks',
                'description' => 'Handcrafted coffees and warm beverages',
                'sort_order'  => 6,
            ],
        ];

        foreach ($categories as $cat) {
            DB::table('categories')->insert([
                'name'        => $cat['name'],
                'slug'        => Str::slug($cat['name']),
                'description' => $cat['description'],
                'is_active'   => true,
                'sort_order'  => $cat['sort_order'],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
