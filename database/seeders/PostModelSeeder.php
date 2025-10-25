<?php

namespace Database\Seeders;

use App\Models\PostModel;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();

        // Create 50 random posts
        \App\Models\PostModel::factory()->count(5)->create([
            'user_id' => function () use ($userIds) {
                return $userIds[array_rand($userIds)]; // pick random user id
            },
        ]);
    }
}
