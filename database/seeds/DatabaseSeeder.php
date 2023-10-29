<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PostDetailsTableSeeder::class);
        $this->call(CarrierTableSeeder::class);
        $this->call(HobbiesTableSeeder::class);
        $this->call(FunctionsTableSeeder::class);
        $this->call(CertificationTableSeeder::class);
        $this->call(UsableLanguagesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(UsableToolsTableSeeder::class);
        $this->call(ToolsTableSeeder::class);
        $this->call(UsableFrameworksTableSeeder::class);
        $this->call(LangFrameTableSeeder::class);
        $this->call(FrameworksTableSeeder::class);
    }
}
