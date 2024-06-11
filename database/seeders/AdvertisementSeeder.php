<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('advertisements')->insert([
            [
                "slug"=> uniqid(uniqid()),
                "title"=> "aaaa",
                "description"=> "aaaaa",
                "image"=> "/storage/advertisements/png_clipart_computer_icons_login_user_system_administrator_admin_desktop_wallpaper_megaphone.png",
                "click_count"=> 11,
                "url"=> "https://www.youtube.com/"
            ],
            [
                "slug"=> uniqid(uniqid()),
                "title"=> "Testing",
                "description"=> "Testing advertisements",
                "image"=> "/storage/advertisements/output_onlinepngtools.jpg",
                "click_count"=> 5,
                "url"=> "http://www.google.com"
            ],
            [
                "slug"=> uniqid(uniqid()),
                "title"=> "test image",
                "description"=> "qa details",
                "image"=> "/storage/advertisements/photo_1542242476_5a3565835a38.jfif",
                "click_count"=> 7,
                "url"=> "https://images.unsplash.com/photo-1542242476-5a3565835a38?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
            ],
            [
                "slug"=> uniqid(uniqid()),
                "title"=> "test 2",
                "description"=> "testing image",
                "image"=> "/storage/advertisements/photo_1531321203830_ca0f46a2607b.jfif",
                "click_count"=> 5,
                "url"=> "https://unsplash.com/photos/6GBNqzdd_fI"
            ],
            [
                "slug"=> uniqid(uniqid()),
                "title"=> "meet 2 Play video",
                "description"=> "meet to play videos",
                "image"=> "/storage/advertisements/devils_tower_photo_l.jpg",
                "click_count"=> 12,
                "url"=> "https://www.google.com/url?sa=i&url=https%3A%2F%2Fvastphotos.com%2Fnew%2F&psig=AOvVaw10JMhixpvWrzw9djWHwrsw&ust=1628690630343000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCLj2gOXPpvICFQAAAAAdAAAAABAD"
            ],
            [
                "slug"=> uniqid(uniqid()),
                "title"=> "Match",
                "description"=> "abcssss",
                "image"=> "/storage/advertisements/download.jfif",
                "click_count"=> 6,
                "url"=> "https://www.gannett-cdn.com/presto/2021/03/04/NNDN/5c999d6a-1d93-4980-bc9a-4c4e11363261-ri_ndn_salve_baseball_19.jpg?crop=4667,2626,x0,y151&width=3200&height=1801&format=pjpg&auto=webp"
            ]
        ]);
    }
}
