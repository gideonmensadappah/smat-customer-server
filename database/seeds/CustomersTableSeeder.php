<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        
        $faker = \Faker\Factory::create();

        Customer::create([
            'fullName' => 'Customer',
            'email' => 'customer@gmail.com',
            'phone' => '0539430984'
        ]);
        
        for($i = 0; $i < 10; $i++) {
            Customer::create([
                'fullName' => 'Customer',
                'email' => 'customer@gmail.com',
                'phone' => '0539430984'
            ]);
        }


    }
}
