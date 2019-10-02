<?php

use Illuminate\Database\Seeder;

class CustomersTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $customer = new \App\Customer();
    $customer->id =1;
    $customer->name = 'Nam Nguyen';
    $customer->dob = '2019-03-12';
    $customer->email ='Nam@gmail.com';
    $customer->city_id =1;
    $customer->save();

        $customer = new \App\Customer();
        $customer->id =2;
        $customer->name = 'Nam Nguyen';
        $customer->dob = '2019-03-12';
        $customer->email ='Quan@gmail.com';
        $customer->city_id =1;
        $customer->save();

        $customer = new \App\Customer();
        $customer->id =3;
        $customer->name = 'Nam Nguyen';
        $customer->dob = '2019-03-12';
        $customer->email ='Hoang@gmail.com';
        $customer->city_id =2;
        $customer->save();
    }
}

























