<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataProductList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		$arrProduct = array('Phone','Laptop','Linh kien','Other');
		foreach ($arrProduct  as $item) {
			# code...
			$productList = new ProductList(); 
			$productList->name=$item;
			$productList->save();
		}

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
