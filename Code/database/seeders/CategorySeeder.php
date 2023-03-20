<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Landscape',
            'preview' => 'imgs/categories/Landscape.jpg',
        ]);
        Category::create([
            'title' => 'Wildlife',
            'preview' => 'imgs/categories/wildlife.jpg',
        ]);
        Category::create([
            'title' => 'Aerial',
            'preview' => 'imgs/categories/aerial.jpg',
        ]);
        Category::create([
            'title' => 'Sports/ Action',
            'preview' => 'imgs/categories/sports-action.jpg',
        ]);
        Category::create([
            'title' => 'Portrait',
            'preview' => 'imgs/categories/portrait.jpg',
        ]);
        Category::create([
            'title' => 'Architectural',
            'preview' => 'imgs/categories/architectural.jpg',
        ]);
        Category::create([
            'title' => 'Wedding/ Event',
            'preview' => 'imgs/categories/wedding-event.jpg',
        ]);
        Category::create([
            'title' => 'Fashion',
            'preview' => 'imgs/categories/fashion.jpg',
        ]);
        Category::create([
            'title' => 'Macro',
            'preview' => 'imgs/categories/macro.jpg',
        ]);
        Category::create([
            'title' => 'Baby/ Family',
            'preview' => 'imgs/categories/baby-family.jpg',
        ]);
        Category::create([
            'title' => 'Abstract',
            'preview' => 'imgs/categories/abstract.jpg',
        ]);
        Category::create([
            'title' => 'Bird',
            'preview' => 'imgs/categories/Bird.jpg',
        ]);
        Category::create([
            'title' => 'Black And White',
            'preview' => 'imgs/categories/Black-and-white.jpg',
        ]);
        Category::create([
            'title' => 'Candid',
            'preview' => 'imgs/categories/candid.jpg',
        ]);
        Category::create([
            'title' => 'Conceptual',
            'preview' => 'imgs/categories/conceptual.jpg',
        ]);
        Category::create([
            'title' => 'Firework',
            'preview' => 'imgs/categories/firework.jpg',
        ]);
        Category::create([
            'title' => 'Food',
            'preview' => 'imgs/categories/food.jpg',
        ]);
        Category::create([
            'title' => 'Perspective',
            'preview' => 'imgs/categories/forced.jpg',
        ]);
        Category::create([
            'title' => 'HDR',
            'preview' => 'imgs/categories/HDR.jpg',
        ]);
        Category::create([
            'title' => 'High Speed',
            'preview' => 'imgs/categories/high-speed.jpg',
        ]);
        Category::create([
            'title' => 'Infrared',
            'preview' => 'imgs/categories/infrared.jpg',
        ]);
        Category::create([
            'title' => 'Lomo',
            'preview' => 'imgs/categories/lomo.jpg',
        ]);
        Category::create([
            'title' => 'Long Exposure',
            'preview' => 'imgs/categories/long.jpg',
        ]);
        Category::create([
            'title' => 'Micro',
            'preview' => 'imgs/categories/micro.jpg',
        ]);
        Category::create([
            'title' => 'Mobile',
            'preview' => 'imgs/categories/mobile.jpg',
        ]);
        Category::create([
            'title' => 'Nature',
            'preview' => 'imgs/categories/nature.jpg',
        ]);
        Category::create([
            'title' => 'Night',
            'preview' => 'imgs/categories/night.jpg',
        ]);
        Category::create([
            'title' => 'Panoramic',
            'preview' => 'imgs/categories/panoramic.jpg',
        ]);
        Category::create([
            'title' => 'Past And Present',
            'preview' => 'imgs/categories/past-and-present.jpg',
        ]);
        Category::create([
            'title' => 'Rain',
            'preview' => 'imgs/categories/Rain.jpg',
        ]);
        Category::create([
            'title' => 'Real Estate',
            'preview' => 'imgs/categories/real-estate.jpg',
        ]);
        Category::create([
            'title' => 'Reflection',
            'preview' => 'imgs/categories/reflection.jpg',
        ]);
        Category::create([
            'title' => 'Satellite',
            'preview' => 'imgs/categories/Satelite.jpg',
        ]);
        Category::create([
            'title' => 'Still Life',
            'preview' => 'imgs/categories/Still-life.jpg',
        ]);
        Category::create([
            'title' => 'Storm',
            'preview' => 'imgs/categories/Storm.jpg',
        ]);
        Category::create([
            'title' => 'Stock',
            'preview' => 'imgs/categories/Stock.jpg',
        ]);
        Category::create([
            'title' => 'Street',
            'preview' => 'imgs/categories/Street.jpg',
        ]);
        Category::create([
            'title' => 'Sunrise/Sunset',
            'preview' => 'imgs/categories/sunrise-sunset.jpg',
        ]);
        Category::create([
            'title' => 'Tilt Shift',
            'preview' => 'imgs/categories/tilt-shift.jpg',
        ]);
        Category::create([
            'title' => 'Time Lapse',
            'preview' => 'imgs/categories/time-lapse.jpg',
        ]);
        Category::create([
            'title' => 'Travel',
            'preview' => 'imgs/categories/travel.jpg',
        ]);
        Category::create([
            'title' => 'Underwater',
            'preview' => 'imgs/categories/underwater.jpg',
        ]);
        Category::create([
            'title' => 'Urban/ Industrial',
            'preview' => 'imgs/categories/urban-industrial.jpg',
        ]);
        Category::create([
            'title' => 'Vehicle',
            'preview' => 'imgs/categories/vehicle.jpg',
        ]);
        Category::create([
            'title' => 'Vintage',
            'preview' => 'imgs/categories/vintage.jpg',
        ]);
    }
}