<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view('category-list', compact('categorys'));
    }
    public function category()
    {
        return view('category');
    }
    public function store(Request $request)
    {
        $category = new Category;
        $category->Name = $request->product_name;
        $category->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $cat = Category::find($id);
        return view('editCat', compact('cat'));
    }
    public function update(Request $request, $id)
    {
        $cat = Category::find($id);
        $cat->Name = $request->product_name;
        $cat->save();
        return redirect('cat');
    }
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect('cat');
    }
    public function index2()
    {
        $products = Product::all();
        return view('product-list', compact('products'));
    }
    public function product()
    {
        return view('product');
    }
    public function store2(Request $request)
    {
        $product = new Product;
        $product->Name = $request->pName;
        $product->price = $request->pPrice;
        $product->category = $request->cat;
        $product->Quantity = $request->pQty;
        $product->save();
        return redirect()->back();
    }
    public function edit2($id)
    {
        $pro = Category::find($id);
        return view('editProduct', compact('pro'));
    }
    public function update2(Request $request, $id)
    {
        $product = Product::find($id);
        $product->Name = $request->pName;
        $product->price = $request->pPrice;
        $product->category = $request->cat;
        $product->Quantity = $request->pQty;
        $product->save();
        return redirect('product');
    }
    public function destroy2($id)
    {
        $pro = Product::find($id);
        $pro->delete();
        return redirect('pro');
    }
}
