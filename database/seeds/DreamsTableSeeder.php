<?php

use Illuminate\Database\Seeder;

class DreamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 30; $i++) {
            DB::table("dreams")->insert([
                "title" => "test title " . $i,
                "content" => "test content " . $i,
                "pict" => "test image " . $i
                ]);
        }
    }
}
