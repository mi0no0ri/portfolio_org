<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => '1',
                'photo' => 'blog_top.png',
                'title' => '旅ブログ',
                'description' => '旅行した記録を写真として残しておくブログです。行ったことのある地域ごとに投稿をまとめて見れるようにしてます。写真はトップページ、ログイン後のマイページと投稿ページです。トップページはエリアにカーソルを合わせると色が変わります。マイページにある地図は訪れた都道府県orエリアの色が変わるようになってます。',
                'url' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'photo' => 'sns_top.png',
                'title' => 'SNS',
                'description' => 'fellow(仲間)×follow(フォローする)。社内向けSNSを想定したため簡易的な機能が主になります。写真はログインページ、トップページ、マイページです。投稿編集は鉛筆マークをおすとモーダルが出て来て編集ができるようになります。',
                'url' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'photo' => 'ec_top.png',
                'title' => 'ECサイト',
                'description' => 'アパレル向けECサイトです。ページの中はおすすめ商品、ランキング、コーディネート例、シーン別コーデ、新商品を表示し、メンズ、レディース、キッズ別に見ることもできます。商品詳細画面では色とサイズ別にカートに入れたり、お気に入り登録が出来、クチコミの投稿も可能です。',
                'url' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
