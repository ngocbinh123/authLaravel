<?php

class ProductListController extends BaseController {
	public function getAll(){
		return DB::table('productList')->get();
	}
}

