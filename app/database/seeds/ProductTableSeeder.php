<?php
class ProductTableSeeder extends Seeder{
	public function run(){
		$arrPro = [
				[
					"name"=>"iphone 5 16gb", 
					"manufacturers"=>"apple",
					"sim"=>"nano sim",
					"weight"=>"0.23kg",
					"screen"=>"dvga, 4.0, 640 x 1136 pixels",
					"maincamera"=>"8.0 mp, quay phim fullhd 1080p@30fp",
					"subcamera"=>"1.2 mp",
					"cpu"=>"apple a6, 2 nhân, 1.3 ghz",
					"opera"=>"ios 6",
					"ram"=>"1gb",
					"memory"=>"16gb",
					"power"=>"1440 mah",
					"price"=>"12000000vnd",
					"img"=>"/assets/imgimg/Iphone/iphone5.png",
					"other"=>"",
					"type_id"=>1
				], [
					"name"=>"iphone 5 32gb", 
					"manufacturers"=>"apple",
					"sim"=>"nano sim",
					"weight"=>"0.23kg",
					"screen"=>"dvga, 4.0, 640 x 1136 pixels",
					"maincamera"=>"8.0 mp, quay phim fullhd 1080p@30fp",
					"subcamera"=>"1.2 mp",
					"cpu"=>"apple a6, 2 nhân, 1.3 ghz",
					"opera"=>"ios 6",
					"ram"=>"1gb",
					"memory"=>"32gb",
					"power"=>"1440 mah",
					"price"=>"12000000vnd",
					"img"=>"/assets/img/Iphone/iphone5.png",
					"other"=>"",
					"type_id"=>1
				],
				[
					"name"=>"Samsung Galaxy S4", 
					"manufacturers"=>"Samsung",
					"sim"=>"1 sim",
					"weight"=>"",
					"screen"=>"5inches Super AMOLED",
					"maincamera"=>"13MP",
					"subcamera"=>"2MP",
					"cpu"=>"Quad-core 1.6 GHz Cortex-A15 & quad-core 1.2 GHz Cortex-A7",
					"opera"=>"Android 4.2 Jelly Bean",
					"ram"=>"2gb",
					"memory"=>"16gb",
					"power"=>"Li-Ion 2600mAh",
					"price"=>"11630000vnd",
					"img"=>"/assets/img/Samsung/galaxys4.png",
					"other"=>"",
					"type_id"=>1
				],
				[
					"name"=>"Samsung Galaxy S5", 
					"manufacturers"=>"Samsung",
					"sim"=>"1 sim",
					"weight"=>"",
					"screen"=>"Full HD, 5.1 inches, 1080 x 1920 pixels",
					"maincamera"=>"16MP",
					"subcamera"=>"2MP",
					"cpu"=>"Quad-core 1.9 GHz Cortex-A15 - quad-core",
					"opera"=>"Android 4.4 (KitKat)",
					"ram"=>"2gb",
					"memory"=>"16gb",
					"power"=>"Li-Ion 2800mAh",
					"price"=>"11790000vnd",
					"img"=>"/assets/img/Samsung/galaxys5.png",
					"other"=>"",
					"type_id"=>1
				],
				[
					"name"=>"LG G2", 
					"manufacturers"=>"LG",
					"sim"=>"1 sim",
					"weight"=>"143g",
					"screen"=>"138.5 x 70.9 x 8.9 mm",
					"maincamera"=>"13MP",
					"subcamera"=>"2MP",
					"cpu"=>"Quad-core 2.26 GHz Krait 400, Adreno 330 GPU, Chipset: Qualcomm MSM8974 Snapdragon 800",
					"opera"=>"Android OS, v4.2.2 (Jelly Bean)",
					"ram"=>"2gb",
					"memory"=>"16gb",
					"power"=>"Li-Ion 2800mAh",
					"price"=>"7499000vnd",
					"img"=>"/assets/img/LG/g2.png",
					"other"=>"",
					"type_id"=>1
				],
				[
					"name"=>"LG G3", 
					"manufacturers"=>"LG",
					"sim"=>"1 sim",
					"weight"=>"143g",
					"screen"=>"5.5 inch - Quad HD IPS, kích thước 138.78 mm, độ phân giải (2,560x1,440)",
					"maincamera"=>"13MP",
					"subcamera"=>"2.1MP",
					"cpu"=>"Qualcomm Snapdragon 801 MSM8974AC v3 (2,5Ghz)",
					"opera"=>"Android 4.4 (KitKat)",
					"ram"=>"2gb",
					"memory"=>"32gb",
					"power"=>"3000mAh",
					"price"=>"9900000vnd",
					"img"=>"/assets/img/LG/g3.png",
					"other"=>"",
					"type_id"=>1
				]];

		foreach ($arrPro as $item) {

			# code...
			$product = new Product();
			$product->name=$item['name'];
			$product->manufacturers=$item['manufacturers'];
			$product->sim=$item['sim'];
			$product->weight=$item['weight'];
			$product->screen=$item['screen'];
			$product->maincamera=$item['maincamera'];
			$product->subcamera=$item['subcamera'];
			$product->cpu=$item['cpu'];
			$product->opera=$item['opera'];
			$product->ram=$item['ram'];
			$product->memory=$item['memory'];
			$product->power=$item['power'];
			$product->price=$item['price'];
			$product->img=$item['img'];
			$product->other=$item['img'];
			$product->type_id=$item['type_id'];
			$product->save();
		}
	}
}