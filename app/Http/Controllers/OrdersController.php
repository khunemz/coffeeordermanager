<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{ 
	public function index()
	{
		return view('orders.index');
	}

	public function store(Request $request)
	{
		return null;
	}

	public function delete($id)
	{
		return null;
	}
}