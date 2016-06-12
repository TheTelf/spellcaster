<?php

use Illuminate\Database\Seeder;

class FighterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fighters')->insert([
            'identifier' => 'Gandalf',
            'hp' => 100,
            'team' => 2,
            'battle_id' => 1
        ]);

        DB::table('fighters')->insert([
            'identifier' => 'Dumbledore',
            'hp' => 100,
            'team' => 3,
            'battle_id' => 1
        ]);

        DB::table('fighters')->insert([
            'identifier' => 'Logged in player',
            'hp' => 100,
            'team' => 1,
            'battle_id' => 1,
            'user_id' => 1
        ]);
    }
}
