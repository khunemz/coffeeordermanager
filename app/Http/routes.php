<?php
use Illuminate\Http\Request;
use App\Order;

$app->get('/', [ 'uses' => 'OrdersController@index', 'as' => 'orders.index']);

# API
$app->get('/api/getall' , function(){
	return \App\Order::all();
});

$app->post('/api/store', function(Request $request){
	return \App\Order::create($request->all());
	
});

$app->delete('/api/{id}', function($id){
	$order = \App\Order::where('id', $id);
	return $order->delete();
});