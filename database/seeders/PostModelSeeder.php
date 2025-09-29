<?php

namespace Database\Seeders;

use App\Models\PostModel;
use Illuminate\Database\Seeder;

class PostModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostModel::factory()->count(10)->create();
    }
}
