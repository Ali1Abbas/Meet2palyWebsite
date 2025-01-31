<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CmsSeeder::class,
            ContentManagementSeeder::class,
            FaqSeeder::class,
            AdvertisementSeeder::class,
            NotificationIdentifierSeeder::class,
            NotificationSeeder::class,
            UserSeeder::class,
            UserFriendSeeder::class
        ]);
    }
}
