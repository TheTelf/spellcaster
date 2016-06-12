<?php

use Illuminate\Database\Seeder;

class BattleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('battles')->insert([
            'user_id' => 1
        ]);
    }
}
