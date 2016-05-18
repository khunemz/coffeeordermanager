<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Order extends Model 
{ 
	protected $fillable = ['name', 'drink'];
	protected $table = 'orders';
	protected $date = ['created_at', 'updated_at'];
}