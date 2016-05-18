@extends('layout.master')
@section('content')
	<h1>Coffee order manager</h3>
	<h2>Coffee Order</h2>
	<ul id="order">
	</ul>

	<h4>Add a coffee order</h4>
	<div class="box">
		<p>name: <input name="name" type="text" id="name"></p>
		<p>drink: <input name="drink" type="text" id="drink"></p>
		<button id="add-order">Place order</button>
	</div>
@endsection