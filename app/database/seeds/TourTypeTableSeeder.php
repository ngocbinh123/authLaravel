<?php
class TourTypeTableSeeder extends Seeder{
	public function run(){{
		// $arrTypes=[
		// 	[
		// 		'name'=>'Southward',
		// 		'name_vn'=>'Miền Nam'
		// 	],
		// 	[
		// 		'name'=>'Norland',
		// 		'name_vn'=>'Miền Bắc'
		// 	],
		// 	[
		// 		'name'=>'Central',
		// 		'name_vn'=>'Miền Trung'
		// 	],
		// 	[
		// 		'name'=>'West',
		// 		'name_vn'=>'Miền Tây'
		// 	],
		// 	[
		// 		'name'=>'Abroad',
		// 		'name_vn'=>'Nước Ng'
		// 	]
		// ];

		// $foreach ($arrTypes as $item) {
		// 	$tourType = mew TourType();
		// 	$tourType->name = $item['name'];
		// 	$tourType->name_vn = $item['name_vn'];
		// 	$tourType->save();
		// }

		DB::table('TourType')->insert([
            'name' => 'Southward',
            'name_vn' => 'Miền Nam',
        ]);
	}
}