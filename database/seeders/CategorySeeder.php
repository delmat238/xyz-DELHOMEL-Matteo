<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo "coucou";
        {
            $categories = [
                'Soul',
                'Ambient',
                'Pop',
                'Rap',
                'Funk',
                'Rock',
                'Reggae / Dub',
                'Techno',
                'Electro'
            ];



            foreach ($categories as $categoryName) {
                DB::table('categories')->insert([
                    'name' => $categoryName
                ]);
            }
        }
    }
}
