<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataProduct extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		$arrPro = ['{
							"name":"Iphone 5 16GB", 
							"manufacturers":"Apple",
							"sim":"Nano SIM",
							"weight":"0.23Kg",
							"screen":"DVGA, 4.0, 640 x 1136 pixels",
							"maincamera":"8.0 MP, Quay phim FullHD 1080p@30fp",
							"subcamera":"1.2 MP",
							"CPU":"Apple A6, 2 nhân, 1.3 GHz",
							"opera":"iOS 6",
							"RAM":"1GB",
							"memory":"16GB",
							"power":"1440 mAh",
							"price":"12000000VND",
							"img":"",
							"other":"",
							"type_id":1
						}', '{
							"name":"Iphone 5 32GB", 
							"manufacturers":"Apple",
							"sim":"Nano SIM",
							"weight":"0.23Kg",
							"screen":"DVGA, 4.0, 640 x 1136 pixels",
							"maincamera":"8.0 MP, Quay phim FullHD 1080p@30fp",
							"subcamera":"1.2 MP",
							"CPU":"Apple A6, 2 nhân, 1.3 GHz",
							"opera":"iOS 6",
							"RAM":"1GB",
							"memory":"32GB",
							"power":"1440 mAh",
							"price":"12000000VND",
							"img":"",
							"other":"",
						
							"type_id":1
						}'];
					
		foreach ($arrPro as $item) {
			# code...
		
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
