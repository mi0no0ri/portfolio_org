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
                'language_id' => '4',
                'skill' => 'スライド',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'ハンバーガーメニュー',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'ドラックアンドドロップ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => '非同期通信',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'モーダル表示',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'タイマー・ストップウォッチ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => 'チャットボット',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '4',
                'skill' => '電卓',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '6',
                'skill' => 'CRUD機能',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '6',
                'skill' => '公式LINE連携',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '6',
                'skill' => 'Gmail連携',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '6',
                'skill' => 'カレンダー表示',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '6',
                'skill' => 'マルチログイン機能',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '6',
                'skill' => 'あいまい検索',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '6',
                'skill' => '画像の投稿可能容量の変更',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_id' => '8',
                'skill' => 'CRUD機能',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
