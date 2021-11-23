<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        'name' => 'Varteliai'
    ]);
        DB::table('categories')->insert([
        'name' => 'Vartai'
    ]);
        DB::table('categories')->insert([
            'name' => 'Tvora'
        ]);
        DB::table('categories')->insert([
            'name' => 'Bokstelis'
        ]);
    }
}
