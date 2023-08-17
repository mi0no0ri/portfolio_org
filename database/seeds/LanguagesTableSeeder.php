<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'post_id' => '1',
                'language_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'language_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'language_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'language_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'language_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'language_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'language_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'language_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'language_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'language_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'language_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'language_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'language_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'language_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'language_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'language_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'language_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'language_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'language_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'language_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'language_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'language_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'language_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'language_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
