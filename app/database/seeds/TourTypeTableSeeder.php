<?php
class TourTypeTableSeeder extends Seeder{
	public function run(){
		$tours = [
			['name' => 'Miền Nam', 'refer_name' => 'mien-nam'],
			['name' => 'Miền Bắc', 'refer_name' => 'mien-bac'],
			['name' => 'Miền Trung', 'refer_name' => 'mien-trung'],
			['name' => 'Tây Nguyên', 'refer_name' => 'tay-nguyen'],
			['name' => 'Tết', 'refer_name' => 'tet'],			
			['name' => 'Du lịch Châu Á', 'refer_name' => 'chau-a'],
			['name' => 'Du lịch Châu Âu', 'refer_name' => 'chau-au'],
			['name' => 'Du lịch Châu Mỹ', 'refer_name' => 'chau-my'],
			['name' => 'Du lịch Châu Úc', 'refer_name' => 'chau-uc'],
			['name' => 'Team building', 'refer_name' => 'team-building']
		];

		DB::table('TourType')->insert($tours);
	}
}
