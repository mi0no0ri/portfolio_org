<?php

use Illuminate\Database\Seeder;

class FrameworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frameworks')->insert([
            [
                'post_id' => '1',
                'framework_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '1',
                'framework_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'framework_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '2',
                'framework_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'framework_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '3',
                'framework_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'framework_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => '4',
                'framework_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
