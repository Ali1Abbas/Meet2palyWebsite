<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationIdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('notification_identifier')->insert([
            [
                'identifier' => 'add_friend',
                'notification_type' => 'push',
                'send_type' => 'target',
                'title' => 'Friend Notification',
                'message' => 'New Friend Notification'
            ], [
                'identifier' => 'request_accepted',
                'notification_type' => 'push',
                'send_type' => 'target',
                'title' => 'Request Accepted',
                'message' => 'Request Accepted'
            ], [
                'identifier' => 'request_rejected',
                'notification_type' => 'push',
                'send_type' => 'target',
                'title' => 'Request Rejected',
                'message' => 'Request Rejected'
            ]
        ]);
    }
}
