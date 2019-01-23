<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
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
     * Show list customer.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::paginate(20);
        return view('customer.index',compact('customers'));
    }
        public function showAddCustomer()
    {
        return view('customer.add');
    }
    public function addCustomer(Request $request){
        try{
        $customer = new Customer;
        $customer ->name =$request->name;
        $customer ->phone_number =$request->phone_number;
        $customer ->address =$request->address;
        $customer ->save();
        }catch(\Exception $e){
            return redirect()->route('customer.showAddCustomer')->with('Fail','Thêm Không thành công');
        }
        
        return redirect()->route('customer.showAddCustomer')->with('Success','Thêm thành công');
    }

    public function showEditCustomer($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }
    public function editCustomer(Request $request)
    {
        try{
        $customer = Customer::find($request->id);
        $customer ->name =$request->name;
        $customer ->phone_number =$request->phone_number;
        $customer ->address =$request->address;
        $customer ->save();
        }catch(\Exception $e){
            return redirect()->route('customer.showEditCustomer')->with('Fail','Chỉnh sửa không thành công');
        }
        
        return redirect()->route('customer.showEditCustomer',['id'=>$request->id])->with('Success','Chỉnh sửa thành công');
    }
    public function deleteCustomer($id)
    {
        try{
        $customer = Customer::find($id);
        $customer ->delete();
        }catch(\Exception $e){
            return redirect()->route('customer.index')->with('Fail','Xóa không thành công');
        }
        
        return redirect()->route('customer.index',['id'=> $id])->with('Success','Xóa thành công');
    }
}
