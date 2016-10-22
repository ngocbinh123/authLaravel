<?php

class TourController extends BaseController {


	/*-------------Show page------------------*/
	

	public function getType($obj){
		$data['title'] = "Danh sách tour";
		$data["tourList"]  = DB::table('Tour')
			->join('TourType', 'TourType.id', '=', 'Tour.type_id')
			->where('TourType.refer_name', '=', $obj)->select('Tour.id','Tour.name', 'price', 'duration')->get();
		return View::make('tour.index',compact('data'));

	}

	public function getAbout(){
		return View::make('about.index',compact('data'));
	}

	public function getContact(){
		return View::make('contact.index',compact('data'));
	}

	// profile 
	public function showEditProfile(){
		return View::make('editProfile');
	}
}