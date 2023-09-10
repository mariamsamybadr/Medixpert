<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([ 
         
            'id'=>'1',
            'drug_name'=>'panadol extra',
            'description'=>'Panadol Extra 500mg/65mg Soluble Effervescent Tablets, paracetamol 500mg, caffeine 65mg. Indications: Relief of mild to moderate pain including rheumatism, neuralgia, musculoskeletal disorders, headache, symptoms of colds and flu, fever, toothache and menstrual pain.',
            'drug_img'=>''

            

        ]);

    }
}
