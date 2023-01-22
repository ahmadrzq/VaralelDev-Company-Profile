<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\About;
use App\Models\MasterData\Intro;
use Database\Seeders\SkillSeeder;
use App\Models\MasterData\Service;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MasterData\Intro::factory(5)->create();
        \App\Models\MasterData\Service::factory(6)->create();
        \App\Models\MasterData\About::factory(3)->create();

        $this->call([
            SkillSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
