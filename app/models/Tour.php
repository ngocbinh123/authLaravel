<?php

class Tour extends Eloquent{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Tour';
	protected $fillable=array('id', 'name', 'short_description', 'description', 'price', 'place', 'duration', 'start_time', 'name_en', 'short_description_en', 'description_en', 'price_en', 'place_en', 'duration_en', 'start_time_en', 'type_id', 'created_at', 'updated_at');
}
