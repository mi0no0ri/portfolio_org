<?php

use Illuminate\Database\Seeder;

class LangFrameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_frame')->insert([
            [
                'language_id' => '3',
                'framework_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'framework_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '5',
                'framework_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
