<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([ 
         
            'id'=>'2',
            'drug_name'=>'Brufen',
            'description'=>'it is for pain',
            'drug_image'=>'drug'
            
            

        ]);

    }
}
