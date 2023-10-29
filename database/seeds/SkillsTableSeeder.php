<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'language_id' => '2',
                'skill' => 'レスポンシブ対応',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => 'スライド',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => 'ハンバーガーメニュー',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => 'ドラックアンドドロップ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => '非同期通信',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => 'モーダル表示',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => 'タイマー・ストップウォッチ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => 'チャットボット',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '3',
                'skill' => '電卓',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'CRUD機能',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => '公式LINE連携',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'Gmail連携',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'カレンダー表示',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'マルチログイン機能',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'あいまい検索',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => '画像の投稿可能容量の変更',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '5',
                'skill' => 'CRUD機能',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
