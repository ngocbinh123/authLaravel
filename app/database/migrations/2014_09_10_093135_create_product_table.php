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

			$table->string('name');	
			$table->string('manufacturers');
			$table->string('sim');
			$table->string('weight');
			$table->string('screen');
			$table->string('memory');

			$table->string('CPU');
			$table->string('RAM');
			$table->string('maincamera');
			$table->string('subcamera');
			$table->string('power');
			$table->string('opera');
			$table->string('other');

			$table->integer('price');
			$table->string('img');
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
