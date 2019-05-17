<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function show()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->price_old = $request->price_old;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('products.create');

    }

    public function edit($productId)
    {
        $product = Product::FindOrFail($productId);
        return view('products.update', compact('product'));
    }

    public function update(Request $request, $productId)
    {
        $product = Product::FindOrFail($productId);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->price_old = $request->price_old;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('products.list');
    }

    public function destroy($producId)
    {
        $product = Product::FindOrFail($producId);
        $product->delete();
        return redirect()->route('products.list');
    }
}
