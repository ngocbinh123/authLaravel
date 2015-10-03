<?php

class ProductTypeController extends BaseController {
	public function getDataProductTypeAll(){
		return DB::table('productType')->get();
	}
}

