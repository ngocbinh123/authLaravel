<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTour extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Tour', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('short_description');
			$table->string('description');
			$table->string('price');
			$table->string('place');
			$table->string('duration');
			$table->string('start_time');


			$table->string('name_en');
			$table->string('short_description_en');
			$table->string('description_en');
			$table->string('price_en');
			$table->string('place_en');
			$table->string('duration_en');
			$table->string('start_time_en');

	        // foreign key
			$table->integer('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('TourType');
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Tour');
	}

}
