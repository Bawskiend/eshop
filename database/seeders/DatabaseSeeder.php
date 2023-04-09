<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i< 9;$i++){
        DB::table('posts')->insert([
            'title' => Str::random(10) .  'title ' . $i,
            'slug'  => Str::random(10) . 'post-'. $i,
            'text'  => Str::random(30) . 'text text text '. $i,
        ]);
        }
    }
}
