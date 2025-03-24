<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Volume;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request)
    {
        $categories = $request->input('categories');  // Selected category names
        $weights = $request->input('weights');        // Selected weights
        $startPrice = $request->input('startPrice');  // Price range start
        $endPrice = $request->input('endPrice');      // Price range end

        // Get selected categories by name
        $selectedCategories = Category::when($categories, function ($query) use ($categories) {
            return $query->whereIn('name', $categories);
        })->pluck('id')->toArray();

        // Get all child categories in a single query
        $categoryIds = Category::whereIn('parent_id', $selectedCategories)
            ->orWhereIn('id', $selectedCategories)
            ->pluck('id')
            ->toArray();

        // Get parent categories with their children
        $parentCategories = Category::whereNull('parent_id')
            ->orderBy('id', 'desc')
            ->limit(4)
            ->with('categories')
            ->get();

        // Get all main categories (for menu)
        $productsMenu = Category::whereNull('parent_id')
            ->orderBy('id', 'desc')
            ->with('categories')
            ->get();

        // Filter products based on selected criteria
        $products = Product::query()
            ->when(empty($categoryIds), function ($query) use ($categoryIds) {
                return $query->whereIn('category_id', $categoryIds);
            })
            ->when($weights, function ($query) use ($weights) {
                $productVolumes = Volume::whereIn('name', $weights)->pluck('id');
                return $query->whereIn('volume_id', $productVolumes);
            })
            ->when($startPrice && $endPrice, function ($query) use ($startPrice, $endPrice) {
                return $query->whereBetween('price', [$startPrice, $endPrice]);
            })
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();
        $categories = Category::all();
        return view('product-filter', [
            'products' => $products,
            'parentCategories' => $parentCategories,
            'productsMenu' => $productsMenu,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $products)
    {
        //
    }
}