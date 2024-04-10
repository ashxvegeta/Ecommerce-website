<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([

                 [
                    'name' => 'playstation',
                    'price' => '1000',
                    'category'=> 'gaming',
                    'description'=> 'Support 8k gaming',
                    'gallary'=>'https://images.unsplash.com/photo-1622297845775-5ff3fef71d13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=407&q=80'
                 ],


                 [
                    'name' => 'Samsumg',
                    'price' => '1000',
                    'category'=> 'gaming',
                    'description'=> 'Support 8k gaming',
                    'gallary'=>'https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=329&q=80'
                 ],

                 [
                    'name' => 'Tshirt',
                    'price' => '1000',
                    'category'=> 'Glossery',
                    'description'=> 'Full cotton t-shirt',
                    'gallary'=>'https://images.unsplash.com/photo-1622445275649-b1922cc3e837?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80'
                 ]
        ]);

    }
}
