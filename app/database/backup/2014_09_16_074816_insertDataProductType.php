<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataProductType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		$arrType = array('Iphone','Nokia','Samsung','Asus','LG','OPPO','Blackbery','Sky','Lenovo');
		foreach ($arrType as $item) {
			# code...
			$productType = new ProductType(); 
			$productType->name=$item;
			$productType->list_id = 1;
			$productType->save();
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
