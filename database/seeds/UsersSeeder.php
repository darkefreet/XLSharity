<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	$date = date("Y-m-d H:i:s");
    	$yayasan = 'Yayasan ';

    	for($i = 0; $i < 10; $i++){	
    		DB::table('users')->insert([
    			'name' => $yayasan.$faker->unique()->name,
	            'email' => $faker->unique()->email,
	            'password' => sha1('1234'),
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elementum turpis vitae justo consectetur pellentesque. Mauris auctor eget ex at convallis. Sed congue mauris sit amet purus aliquam, eget pellentesque orci tincidunt. Nunc maximus gravida ligula, pharetra posuere nibh placerat eu. Phasellus sit amet pretium diam. Vestibulum venenatis auctor erat quis porta. Maecenas consectetur, nulla ut venenatis mattis, lorem risus tristique lectus, non feugiat elit felis at justo. Fusce id ex vel tortor dignissim congue sed non nisl. Nullam sollicitudin enim non rutrum luctus. Vivamus maximus rhoncus nisi, sit amet lacinia neque consectetur sed. Nullam ultricies orci nunc. Sed consectetur mi at bibendum placerat.',
	            'banner_pict' => 'null',
	            'icon_pict' => 'null',
	            'kategori' => rand(1,9),
	            'created_at' => $date,
	            'updated_at' => $date
        	]);	
    	}
    }
}
