<?php
//app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;
use App\Models\Product;
 // Assuming you have a Category model
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->get();
        return view('home', ['products' => $products]);
    }

    public function edit(Request $request) {
        // dd($request->all());
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'product_name' => 'required|string|max:255',
            'brand_id' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);
    
        $product = Product::findOrFail($request->product_id);
        $product->product_name = $request->product_name;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
    
        return redirect('/product')->with('success', 'Product updated successfully.');
    }

    public function destroy(Request $request) {
        // dd($request->all());
    
        $product = Product::findOrFail($request->product_id);
        $product->delete();
    
        return redirect('/product')->with('success', 'Product deleted successfully.');
    }
    
    // Display a listing of the products
    public function store(Request $request) {
        
        
        // Validate the incoming request
        $request->validate([
            'pro_name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id', 
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);
        
        // Create a new product
        $product = Product::create([
            'brand_id' => $request->input('brand_id'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'stock_quantity' => 10,
            'slug' => Str::slug($request->input('pro_name')),
            'description' => $request->input('description'),
            'product_name' => $request->input('pro_name'),
            
        ]);
            
        // // Redirect or return a response
        return redirect('/product')->with('success', 'Product added successfully.');    
    }
}
