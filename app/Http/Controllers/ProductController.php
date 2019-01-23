<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
     * Show list product.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(20);
        $categorys = Category::all();
        return view('product.index',compact('products','categorys'));
    }
    public function showAddProduct()
    {
        $categorys = Category::all();
        return view('product.add',compact('categorys'));
    }
    public function addProduct(Request $request){
        try{
        $product = new Product;
        $product ->name =$request->name;
        $product ->price =$request->price;
        $product ->category_id =$request->categoryId;
        $product ->save();
        }catch(\Exception $e){
            return redirect()->route('product.showAddProduct')->with('Fail','Thêm Không thành công');
        }
        
        return redirect()->route('product.showAddProduct')->with('Success','Thêm thành công');
    }

    public function showEditProduct($id)
    {
        $categorys = Category::all();
        $product = Product::find($id);
        return view('product.edit',compact('categorys','product'));
    }
    public function editProduct(Request $request)
    {

        try{
        $product = Product::find($request->id);
        $product ->name =$request ->name;
        $product ->price =$request ->price;
        $product ->category_id =$request->categoryId;

        $product ->save();
        }catch(\Exception $e){
            return redirect()->route('product.showEditProduct',['id'=>$request->id])->with('Fail','Chỉnh sửa không thành công');
        }
        
        return redirect()->route('product.showEditProduct',['id'=>$request->id])->with('Success','Chỉnh sửa thành công');
    }
    public function deleteProduct($id)
    {
        try{
        $product = Product::find($id);
        $product ->delete();
        }catch(\Exception $e){
            return redirect()->route('product.index')->with('Fail','Xóa không thành công');
        }
        
        return redirect()->route('product.index')->with('Success','Xóa thành công');
    }
}
