<?php

class ProductListController extends BaseController {
	public function getDataProductListAll(){
		return DB::table('productList')->get();
	}
}

