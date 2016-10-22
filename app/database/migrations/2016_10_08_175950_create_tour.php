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
			$table->string('short_description')->nullable();
			$table->string('description')->nullable();
			$table->string('price')->nullable();
			$table->string('place')->nullable();
			$table->string('duration')->nullable();
			$table->string('start_time')->nullable();


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
