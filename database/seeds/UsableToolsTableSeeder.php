<?php

use Illuminate\Database\Seeder;

class UsableToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usableTools')->insert([
            [
                'tool' => 'OS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tool' => 'DB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tool' => 'Communicate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tool' => 'Other',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
