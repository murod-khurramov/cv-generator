<?php

namespace Database\Seeders;

use App\Models\SkillUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillUser::factory()->count(10)->create();
    }
}
