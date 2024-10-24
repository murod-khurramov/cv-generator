<?php

namespace Database\Seeders;

use App\Models\SocialNetworkUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkUserSeeder extends Seeder
{
    public function run(): void
    {
        SocialNetworkUser::factory()->count(10)->create();
    }
}
