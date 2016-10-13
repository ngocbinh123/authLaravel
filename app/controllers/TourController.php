<?php

class TourController extends BaseController {


	/*-------------Show page------------------*/
	public function getTourList(){
		// $data['pList']=Apptou::make('ProductListController')->{'getDataProductListAll'}();
		// $data['pType']=App::make('ProductTypeController')->{'getDataProductTypeAll'}();
		// $data['pro']=App::make('ProductController')->{'getDataProductAll'}();
		// return View::make('home.index', compact('data'));

		return View::make('tour.index',compact('data'));
	}

	public function getInternalTourList(){
		// $data['pList']=Apptou::make('ProductListController')->{'getDataProductListAll'}();
		// $data['pType']=App::make('ProductTypeController')->{'getDataProductTypeAll'}();
		// $data['pro']=App::make('ProductController')->{'getDataProductAll'}();
		// return View::make('home.index', compact('data'));
		$data['title'] = "Tour trong nước";
		//$data["tourList"] = DB::table('Tour')->get();
		$data["tourList"]  = DB::table('Tour')->where('type_id', '<', 5)->get();

		return View::make('tour.index',compact('data'));
	}

	public function getType($obj){
		$data['title'] = "Tour trong nước";
		//$data["tourList"] = DB::table('Tour')->get();
		$data["tourList"]  = DB::table('Tour')->where('type_id', '=', $obj)->get();

		return View::make('tour.index',compact('data'));

	}
	public function getExternalTourList(){
		// $data['pList']=Apptou::make('ProductListController')->{'getDataProductListAll'}();
		// $data['pType']=App::make('ProductTypeController')->{'getDataProductTypeAll'}();
		// $data['pro']=App::make('ProductController')->{'getDataProductAll'}();
		// return View::make('home.index', compact('data'));
		$data['index'] = "tour ngoài nước";
		return View::make('tour.index',compact('data'));
	}

	public function getTeamBuildingTourList(){
		// $data['pList']=Apptou::make('ProductListController')->{'getDataProductListAll'}();
		// $data['pType']=App::make('ProductTypeController')->{'getDataProductTypeAll'}();
		// $data['pro']=App::make('ProductController')->{'getDataProductAll'}();
		// return View::make('home.index', compact('data'));
		$data['index'] = "tour team building";
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

	/*-------------Get data------------------*/
	/*public function getProductList(){
		$proLs = DB::table('productType')->get();
		return $proLs;
	}*/

}

