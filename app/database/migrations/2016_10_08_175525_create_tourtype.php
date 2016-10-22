<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourtype extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TourType', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('refer_name');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations. =>  you want to run this down method, please run this command in terminal: php artisan migrate:rollback 
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TourType');
	}

}
