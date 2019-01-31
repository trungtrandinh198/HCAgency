<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
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
	public function index(){
		return view('sell.index');
	}
}
