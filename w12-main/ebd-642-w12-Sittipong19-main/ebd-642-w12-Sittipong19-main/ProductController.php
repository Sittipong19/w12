<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::with('category')->get();
        $categorys=Category::all();
        return Inertia::render('Product/Index',['products' => $products,'categorys'=>$categorys]);
    }
    public function store(Request $request){
        // dd($request->all());
        Product::create($request->all());
        return redirect()->back();
    }
    public function update(Request $request){

        
        if($request->has('id')){
            // dd($request->all());
            Product::find($request->input('id'))->update($request->all());
            return redirect()->back();
        }
        
    }
    public function destroy(Request $request){
        Product::find($request->input('id'))->delete();
        return redirect()->back();
    }
}
