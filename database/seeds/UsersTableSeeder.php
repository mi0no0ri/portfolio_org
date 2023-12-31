<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'minori',
                'email' => 'minori.nishizawa.0314@gmail.com',
                'password' => Hash::make('minoriNOpass'),
                'introduce' => 'ご覧いただきありがとうございます。1997年3月14日生まれ、千葉県在住のminoriと申します。グランドスタッフからSEに転職し、現在はPHPを使用する現場で日々奮闘中です。某航空会社で学んだ一流の接客を生かして、丁寧なコミュニケーションを大切にしております。',
                'image' => 'myimage.jpg',
                'background' => 'background.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
