<?php
class TourTableSeeder extends Seeder{
	public function run(){
		$tours = [
			['name' => 'Miền Tây', 'price' => '1,999,000 VND', 'duration'=>'3 ngày 2 đêm', 'type_id'=>1,'tag'=>'special'],
			['name' => 'Singapore', 'price' => '6,666,000 VND', 'duration'=>'3 ngày 2 đêm', 'type_id'=>6,'tag'=>'special'],
			['name' => 'Đà Lạt', 'price' => '1,999,000 VND', 'duration'=>'3 ngày 2 đêm', 'type_id'=>4,'tag'=>'special'],
			['name' => 'Phuket', 'price' => '6,999,000 VND', 'duration'=>'4 ngày 3 đêm', 'type_id'=>6,'tag'=>'special'],

			['name' => 'Malaysia', 'price' => '3,888,000 VND', 'duration'=>'3 ngày 2 đêm', 'type_id'=>6,'tag'=>'hot'],
			['name' => 'Hàn Quốc', 'price' => '10,900,000 VND', 'duration'=>'4 ngày 4 đêm', 'type_id'=>6,'tag'=>'hot'],
			['name' => 'Sài Gòn – TP.HCM', 'price' => '399,000 VND', 'duration'=>'1 ngày', 'type_id'=>1,'tag'=>'hot']
		];

		DB::table('Tour')->insert($tours);
	}
}