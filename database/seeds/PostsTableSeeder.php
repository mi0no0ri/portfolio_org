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
                'title' => 'SNS',
                'description' => 'fellow(仲間)×follow(フォローする)。社内向けSNSを想定したため簡易的な機能が主になります。写真はログインページ、トップページ、マイページです。投稿編集は鉛筆マークをおすとモーダルが出て来て編集ができるようになります。',
                'url' => '',
                'created_at' => now()->subMonth(3),
                'updated_at' => now()->subMonth(3),
            ],
            [
                'user_id' => '1',
                'title' => 'ECサイト',
                'description' => 'アパレル向けECサイトです。ページの中はおすすめ商品、ランキング、コーディネート例、シーン別コーデ、新商品を表示し、メンズ、レディース、キッズ別に見ることもできます。商品詳細画面では色とサイズ別にカートに入れたり、お気に入り登録が出来、クチコミの投稿も可能です。',
                'url' => '',
                'created_at' => now()->subMonth(2),
                'updated_at' => now()->subMonth(2),
            ],
            [
                'user_id' => '1',
                'title' => '旅ブログ',
                'description' => '旅行した記録を写真として残しておくブログです。行ったことのある地域ごとに投稿をまとめて見れるようにしてます。写真はトップページ、ログイン後のマイページと投稿ページです。トップページはエリアにカーソルを合わせると色が変わります。マイページにある地図は訪れた都道府県orエリアの色が変わるようになってます。',
                'url' => '',
                'created_at' => now()->subMonth(1),
                'updated_at' => now()->subMonth(1),
            ],
            [
                'user_id' => '1',
                'title' => 'イベントカフェ『うつCAFE』',
                'description' => 'うつを経験したオーナーがうつで悩んでいる方、生きづらさを感じる方を一人にさせない場所として開催した「うつCAFE」。そちらのホームページを作成させていただきました。お店の予約は基本LINEとのことで公式LINEとの連携、予約待ちをしている方の人数の見える化をメインとしてサイトを作成。サイトを訪れた方の心に余裕を作って欲しいという思いから全体的に余白を多めに、色自体は少なめにしつつ暗くならないようにして作成しました。',
                'url' => 'https://793b-2400-4051-19e2-8200-cc9a-546a-6555-bff.ngrok-free.app',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
