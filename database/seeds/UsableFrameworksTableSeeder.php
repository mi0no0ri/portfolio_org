<?php

use Illuminate\Database\Seeder;

class UsableFrameworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usableFrameworks')->insert([
            [
                'framework' => 'jQuery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'framework' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'framework' => 'springboot',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
