<?php

class ProductController extends BaseController {

	public function getDataMenu(){
		$data['pList']=DB::table('productList')->get();
		$data['pType']=DB::table('productType')->get();
		return View::make('include._menu', compact('data'));
	}

	/*-------------Get data------------------*/
	public function getDataproductAll(){
		return DB::table('product')->get();
	}



}

