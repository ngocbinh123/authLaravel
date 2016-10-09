<?php

class TourType extends Eloquent{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'TourType';
	protected $fillable=array('id','name',"name_vn");
}
