<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\URL;
class CategoryController extends Controller
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
     * Show the list category.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorys = Category::paginate(5);
        return view('category.index',['categorys'=>$categorys]);
    }
    public function showAddCategory()
    {
        return view('category.add');
    }
    public function addCategory(Request $request){
        try{
        $category = new Category;
        $category ->name =$request->name;
        $category ->save();
        }catch(\Exception $e){
            return redirect()->route('category.showAddCategory')->with('Fail','Thêm Không thành công');
        }
        
        return redirect()->route('category.showAddCategory')->with('Success','Thêm thành công');
    }

    public function showEditCategory($id)
    {
        $category = Category::find($id);
        return view('category.edit',['category'=>$category]);
    }
    public function editCategory(Request $request)
    {
        try{
        $category = Category::find($request->id);
        $category ->name =$requestme->name;
        $category ->save();
        }catch(\Exception $e){
            return redirect()->route('category.showEditCategory')->with('Fail','Chỉnh sửa không thành công');
        }
        
        return redirect()->route('category.showEditCategory',['id'=>$request->id])->with('Success','Chỉnh sửa thành công');
    }
    public function deleteCategory($id)
    {
        try{
        $category = Category::find($id);
        $category ->delete();
        }catch(\Exception $e){
            return redirect()->route('category.index')->with('Fail','Chỉnh sửa không thành công');
        }
        
        return redirect()->route('category.index',['id'=>$request->id])->with('Success','Chỉnh sửa thành công');
    }
}
