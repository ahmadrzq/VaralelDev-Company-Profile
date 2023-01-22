<?php

namespace Database\Seeders;

use App\Models\MasterData\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $skills = [
            [
                'name' => 'HTML',
                'value' => 90,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'CSS',
                'value' => 80,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Javascript',
                'value' => 75,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PHP',
                'value' => 75,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Skill::insert($skills);
    }
}
