<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$name = ['Yayasan Kesehatan Anak', 'Yayasan Lansia', 'Kampung Kreatif', 'Yayasan Pendidikan Anak Jalanan', 'Yayasan Berbagi Literatur','Yayasan Disabilitas','Yayasan Kampung Hijau', 'Yayasan Yatim Piatu', 'Komunitas Pengolahan Limbah'];
    	$template = ' adalah yayasan yang bergabung dengan Sharity sejak bla.. bla... bla...';

    	$date = date("Y-m-d H:i:s");

    	foreach($name as $yayasan){
    		DB::table('kategori')->insert([
	            'name' => $yayasan,
	            'description' => $yayasan.$template,
	            'icon' => 'null',
	            'banner' => 'null',
	            'created_at' => $date,
	            'updated_at' => $date
        	]);	
    	}
        
    }
}
