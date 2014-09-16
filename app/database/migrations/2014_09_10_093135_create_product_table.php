<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('Product',function($table){
			$table->increments('id');
			$table->primary('id');
			
			$table->string('name');	
			$table->string('manufacturers');
			$table->string('sim');
			$table->string('weight');
			$table->string('screenSize');
			$table->string('screenType'); 
			$table->string('memory');
			$table->string('chipset');
			$table->string('CPU');
			$table->string('GPU');
			$table->string('camera');
			$table->string('pin');
			$table->string('other');
			$table->integer('number');
			$table->integer('price');
			$talbe->string
			$table->timestamps();
			$table->integer('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('producttype');
		});
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
