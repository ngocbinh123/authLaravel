<?php

class ProductTypeController extends BaseController {
	public function getAll(){
		return DB::table('productType')->get();
	}
}

