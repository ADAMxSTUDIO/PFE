<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Picture::create([
            'src' => 'imgs/pics/default.jpeg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/1.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/2.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/3.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/4.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/5.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/6.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/7.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/8.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/9.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/10.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/11.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/12.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/13.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/14.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/15.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/16.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/17.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/18.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        Picture::create([
            'src' => 'imgs/pics/19.jpg',
            'license' => fake()->boolean,
            'category_id' => fake()->numberBetween(0, DB::table('categories')->count()),
            'dimensions' => fake()->randomElement(['1280 x 720', '1366 x 768', '1440 x 1024', '1080 x 1080']),
            'aspect_ratio' => fake()->randomElement(['3:2', '16:9', '1:1', '2:3', '4:3']),
            'file_size' => fake()->numberBetween(0, 20000000),
            'views' => fake()->numberBetween(0, 100000000),
            'price' => fake()->randomFloat(null, null, 5000),
            'owner_id' => fake()->numberBetween(0, DB::table('owners')->count()),
        ]);
        
    }
}