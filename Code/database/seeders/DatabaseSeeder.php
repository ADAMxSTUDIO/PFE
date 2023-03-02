<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\OwnerSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PictureSeeder;
use Database\Seeders\SaleSeeder;
use Database\Seeders\FollowingSeeder;
use Database\Seeders\FollowerSeeder;
use Database\Seeders\CollectionSeeder;
use Database\Seeders\LikeSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Factory
        $this->call(ClientSeeder::class);
        $this->call(OwnerSeeder::class);

        // Seeder
        $this->call(CategorySeeder::class);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        // Factory
        $this->call(PictureSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(FollowingSeeder::class);
        $this->call(FollowerSeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(LikeSeeder::class);

        Schema::enableForeignKeyConstraints();
        
    }
}