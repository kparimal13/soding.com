<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		
		/* DB::table('user_details')->insert([
            'userid' => str_random(10),
			'name' => str_random(10),
            'passport_number' => str_random(10),
            'phone_number' => str_random(10),
        ]); */
		factory(App\tasks::class,12)->create();
		
    }
}


	