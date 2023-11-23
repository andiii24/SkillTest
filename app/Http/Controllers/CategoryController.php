<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::where("id",$id)->first();
        $products = Product::where("cate_id",$id)->get();
        // dd($products);
        return view('category', compact('category','products'));
    }
    public function categories()
    {
        $categories = Category::all();
        // dd($products);
        return view('categories', compact('categories'));
    }
}
