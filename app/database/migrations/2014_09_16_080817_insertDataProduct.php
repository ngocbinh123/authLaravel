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
