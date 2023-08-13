<?php

use Illuminate\Database\Seeder;

class CertificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certifications')->insert([
            [
                'user_id' => '1',
                'certification' => 'ITパスポート',
                'date' => '2022-03-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'certification' => 'TOEIC 735点',
                'date' => '2021-06-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'certification' => '普通運転免許',
                'date' => '2019-04-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'certification' => '秘書検定2級',
                'date' => '2018-06-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
