<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProjectSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            LanguageSeeder::class,
            LanguageUserSeeder::class,
            SkillSeeder::class,
            SkillUserSeeder::class,
            SocialNetworkSeeder::class,
            SocialNetworkUserSeeder::class,
        ]);
    }
}
