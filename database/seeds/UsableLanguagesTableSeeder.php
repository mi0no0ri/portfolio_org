<?php

use Illuminate\Database\Seeder;

class UsableLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usableLanguages')->insert([
            [
                'language' => 'HTML',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language' => 'CSS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language' => 'JavaScript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language' => 'Java',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
