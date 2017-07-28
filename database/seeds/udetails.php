<?php

use Illuminate\Database\Seeder;

class udetails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_details')->insert([
            'name' => str_random(15),
            'userid' => str_random(6),
            'passport_number' => str_random(5),
			'phone_number' => str_random(11),
        ]);
		
		DB::table('user_addresses')->insert([
           'userid' => str_random(6),
             'address1' => str_random(55),
			 'postcode' => str_random(6),
			 'state' => str_random(6),
			 'country' => str_random(6),
			 'created_at' => '0000-00-00 00:00:00',
			'updated_at' => '0000-00-00 00:00:00',
        ]);
    }
}
