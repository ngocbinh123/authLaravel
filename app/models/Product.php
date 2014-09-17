<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laravel\Cashier\BillableTrait;
use Laravel\Cashier\BillableInterface;

class Product extends Eloquent implements UserInterface, RemindableInterface, BillableInterface {

	use UserTrait, RemindableTrait,BillableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product';
	protected $fillable=array('id','name','manufacturers','sim','weight','screen','maincamera','subcamera','opera','RAM','memory','power','price','img','other','type_id');
}

$product = new Product(); 
			$productType->name=$item["name"];
			$productType->CPU=$item["CPU"];
			$productType->manufacturers=$item["manufacturers"];
			$productType->sim=$item["sim"];
			$productType->weight=$item["weight"];
			$productType->screen=$item["screen"];
			$productType->maincamera=$item["maincamera"];
			$productType->subcamera=$item["subcamera"];
			$productType->opera=$item["opera"];
			$productType->RAM=$item["RAM"];
			$productType->memory=$item["memory"];
			$productType->power=$item["power"];
			$productType->price=$item["price"];
			$productType->img=$item["img"];
			$productType->other=$item["other"];
			$productType->list_id=$item["type_id"];