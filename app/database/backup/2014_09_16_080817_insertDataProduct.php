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

		$arrPro = [
				{
					"name"=>"iphone 5 16gb", 
					"manufacturers"=>"apple",
					"sim":"nano sim",
					"weight":"0.23kg",
					"screen":"dvga, 4.0, 640 x 1136 pixels",
					"maincamera":"8.0 mp, quay phim fullhd 1080p@30fp",
					"subcamera":"1.2 mp",
					"cpu":"apple a6, 2 nhân, 1.3 ghz",
					"opera":"ios 6",
					"ram":"1gb",
					"memory":"16gb",
					"power":"1440 mah",
					"price":"12000000vnd",
					"img":"",
					"other":"",
					"type_id":1
				}, {
					"name":"iphone 5 32gb", 
					"manufacturers":"apple",
					"sim":"nano sim",
					"weight":"0.23kg",
					"screen":"dvga, 4.0, 640 x 1136 pixels",
					"maincamera":"8.0 mp, quay phim fullhd 1080p@30fp",
					"subcamera":"1.2 mp",
					"cpu":"apple a6, 2 nhân, 1.3 ghz",
					"opera":"ios 6",
					"ram":"1gb",
					"memory":"32gb",
					"power":"1440 mah",
					"price":"12000000vnd",
					"img":"",
					"other":"",
				
					"type_id":1
				}];

		foreach ($arrPro as $item) {

			# code...
			$product = new product();
			$product=$item;
			$product->save();
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
