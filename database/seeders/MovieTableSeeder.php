<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'Naruto 1',
                'slug' => 'naruto-1',
                'category' => 'Animation',
                'video_url' => 'https://d33kv075lir7n3.cloudfront.net/Details+Screen+Part+Final.mp4',
                'thumbnail' => 'https://pict.sindonews.net/dyn/850/pena/news/2022/01/13/39/655579/harga-fotofoto-ghozali-bikin-melongo-ada-yang-laku-rp42-miliiar-fwx.jpg',
                'rating' => 9.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'Naruto 2',
                'slug' => 'naruto-2',
                'category' => 'Animation',
                'video_url' => 'https://d33kv075lir7n3.cloudfront.net/Details+Screen+Part+Final.mp4',
                'thumbnail' => 'https://pict.sindonews.net/dyn/850/pena/news/2022/01/13/39/655579/harga-fotofoto-ghozali-bikin-melongo-ada-yang-laku-rp42-miliiar-fwx.jpg',
                'rating' => 8.3,
                'is_featured' => 0,
            ],
            [
                'name' => 'Naruto 3',
                'slug' => 'naruto-3',
                'category' => 'Animation',
                'video_url' => 'https://d33kv075lir7n3.cloudfront.net/Details+Screen+Part+Final.mp4',
                'thumbnail' => 'https://pict.sindonews.net/dyn/850/pena/news/2022/01/13/39/655579/harga-fotofoto-ghozali-bikin-melongo-ada-yang-laku-rp42-miliiar-fwx.jpg',
                'rating' => 7.3,
                'is_featured' => 0,
            ]
        ];
        Movie::insert($movies);
    }
}
