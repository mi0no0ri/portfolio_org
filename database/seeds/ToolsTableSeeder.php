<?php

use Illuminate\Database\Seeder;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
            [
                'user_id' => '1',
                'tool_id' => '1',
                'skill' => 'Mac OS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '1',
                'skill' => 'Windows',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '1',
                'skill' => 'Linux',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '2',
                'skill' => 'MySQL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '2',
                'skill' => 'Oracle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '3',
                'skill' => 'Microsoft Teams',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '3',
                'skill' => 'google Meet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '3',
                'skill' => 'Gmail',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '3',
                'skill' => 'Zoom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '3',
                'skill' => 'Slack',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '4',
                'skill' => 'Github',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '4',
                'skill' => 'Saurce Tree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '4',
                'skill' => 'Figma',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '1',
                'tool_id' => '4',
                'skill' => 'Backlog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
