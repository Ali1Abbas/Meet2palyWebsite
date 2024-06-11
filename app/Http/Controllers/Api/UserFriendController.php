<?php

namespace App\Http\Controllers\Api;

use App\Models\NotificationIdentifier;
use App\Models\User;
use App\Models\UserFriend;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;

class UserFriendController
{
    public function getFriend(Request $request)
    {
        $user_friend = DB::select("SELECT CONCAT(`users`.first_name, ' ', `users`.last_name) AS username,`users`.social_type, user_friends.target_social_id, user_friends.is_friend FROM user_friends, `users` WHERE user_friends.`target_social_id` = `users`.`social_id` AND user_friends.user_social_id = '" . $request->user_social_id . "' AND user_friends.target_social_id = '" . $request->target_social_id . "' ORDER BY user_friends.id DESC");

        if ($user_friend && count($user_friend) > 0) {
            $data = $user_friend[0];
        } else {
            $data = [

            ];
        }

        if ($user_friend && count($user_friend) > 0) {
            if($user_friend[0]->is_friend == 0){
                return response()->json([
                    'code' => 300,
                    // 'data' => $data,
                    // 'message' => 'user friend list.'
                ], 200);
            }

            if($user_friend[0]->is_friend == 1){
                return response()->json([
                    'code' => 200,
                    // 'data' => $data,
                    // 'message' => 'user friend list.'
                ], 200);
            }
        } else {
            return response()->json([
                'code' => 400,
                // 'data' => $data,
                //  'message' => 'no user found.'
            ], 200);
        }


    }

    public function addFriend(Request $request)
    {
        $user_friend = DB::select("SELECT * FROM user_friends WHERE user_social_id = '" . $request->user_social_id . "' AND target_social_id = '" . $request->target_social_id . "'");

        if (!$user_friend && count($user_friend) == 0) {


            $user = User::where('social_id', $request->user_social_id)->first();
            $targetUser = User::where('social_id', $request->target_social_id)->first();

            DB::select("DELETE FROM notification WHERE target_id = '" . $user->id . "' AND actor_id = '" . $targetUser->id . "' AND status_code = '2'");
            $UserFriend = new UserFriend();
            $user = DB::select("SELECT * FROM users WHERE social_id = '" . $request->user_social_id . "'");
            $UserFriend->user_social_id = $request->user_social_id;
            $UserFriend->user_id = $user[0]->id;
            $UserFriend->target_id = $targetUser->id;
            $UserFriend->target_social_id = $request->target_social_id;
            $UserFriend->is_friend = 0;
            $UserFriend->save();

            $user = User::where('social_id', $request->user_social_id)->first();
            $targetUser = User::where('social_id', $request->target_social_id)->first();


            $message_data = "New Friend Notification";
            $notification_data = [
                'appName' => "Friend APP",
                'user' => $user, /*Actor*/
                'targetUser' => $targetUser,
                'referenceId' => $UserFriend->id,
                'referenceModule' => 'add_friend',
                'message' => $message_data,
                'title' => "Add Friend"
            ];


            $custom_data = ['tab_id' => 'tab_id', 'title' => "Friend Notification", 'message' => $message_data, 'status_code' => '0'];
            NotificationIdentifier::notificationIdentifier('add_friend', $notification_data, $custom_data);
        }



        $user_friend = DB::select("SELECT CONCAT(`users`.first_name, ' ', `users`.last_name) AS username,`users`.social_type, user_friends.target_social_id FROM user_friends, `users` WHERE user_friends.`target_social_id` = `users`.`social_id` AND user_friends.user_social_id = '" . $request->user_social_id . "' ORDER BY user_friends.id DESC");


        if ($user_friend && count($user_friend) > 0) {
            return response()->json([
                'code' => 300,
                //  'data' => $user_friend,
                //  'message' => 'user friend list.'
            ], 200);
        } else {
            return response()->json([
                'code' => 400,
                // 'data' => [],
                //   'message' => 'no user found.'
            ], 200);
        }


    }

    public function friendList(Request $request)
    {

        $user_friend = DB::select("SELECT
       CONCAT(`users`.first_name, ' ', `users`.last_name) AS username,
       `users`.social_type, user_friends.target_social_id FROM user_friends,
     `users` WHERE user_friends.`target_social_id` = `users`.`social_id`
              AND (user_friends.user_social_id = '" . $request->user_social_id . "' OR user_friends.target_social_id = '" . $request->user_social_id . "')
              AND user_friends.is_friend = '1' ORDER BY user_friends.id DESC");

        $data = [
            'user_friend' => $user_friend,
        ];

        if ($user_friend && count($user_friend) > 0) {
            return response()->json([
                'code' => 200,
                'data' => $user_friend,
                'message' => 'user friend list.'
            ], 200);
        } else {
            return response()->json([
                'code' => 400,
                'data' => [],
                'message' => 'no user found.'
            ], 200);
        }

    }


    public function deleteFriend(Request $request)
    {
        $user_friend = DB::select("SELECT * FROM user_friends WHERE user_social_id = '" . $request->user_social_id . "' AND target_social_id = '" . $request->target_social_id . "'");
        $user_social_id2 = $user_friend[0]->user_social_id;
        $target_social_id2 = $user_friend[0]->target_social_id;
        if ($user_friend && count($user_friend) > 0) {
            DB::select("DELETE FROM user_friends WHERE user_social_id = '" . $request->user_social_id . "' AND target_social_id = '" . $request->target_social_id . "'");
            DB::select("DELETE FROM user_friends WHERE user_social_id = '" . $target_social_id2 . "' AND target_social_id = '" . $user_social_id2 . "'");
            $user_social = DB::select("SELECT * FROM users WHERE social_id = '" . $request->user_social_id . "'");
            $target_social = DB::select("SELECT * FROM users WHERE social_id = '" . $request->target_social_id . "'");
            DB::select("DELETE FROM notification WHERE actor_id = '" . $user_social[0]->id . "' AND target_id = '" . $target_social[0]->id . "' AND reference_module = 'add_friend'");
            return response()->json([
                'code' => 200,
                //  'data' => $user_friend,
                //  'message' => 'user friend list.'
            ], 200);
        } else {
            return response()->json([
                'code' => 400,
                // 'data' => [],
                //   'message' => 'no user found.'
            ], 200);
        }


    }

    public function updateRequest(Request $request)
    {
        $user_friend = DB::select("SELECT * FROM user_friends WHERE target_social_id = '" . $request->receiver_target_social_id . "' AND user_social_id = '" . $request->sender_user_social_id . "'");
        if ($user_friend && count($user_friend) > 0) {
            if($user_friend[0]->is_friend == 0){
                if($request->request_status == 1){
                    $user_social_id2 = $user_friend[0]->user_social_id;
                    $target_social_id2 = $user_friend[0]->target_social_id;
                    $target_id2 = $user_friend[0]->target_id;
                    $user_id2 = $user_friend[0]->user_id;
                    $user_friend = DB::select("SELECT * FROM user_friends WHERE target_social_id = '" . $target_social_id2 . "' AND user_social_id = '" . $user_social_id2 . "'");
                    $UserFriend = new UserFriend();
                    $UserFriend->user_social_id = $target_social_id2;
                    $UserFriend->target_social_id = $user_social_id2;
                    $UserFriend->user_id = $target_id2;
                    $UserFriend->target_id = $user_id2;
                    $UserFriend->is_friend = 1;
                    $UserFriend->save();

                    $user = User::where('social_id',  $request->receiver_target_social_id)->first();
                    $targetUser = User::where('social_id',$request->sender_user_social_id)->first();


                    DB::select("DELETE FROM notification WHERE target_id = '" . $user->id . "' AND actor_id = '" . $targetUser->id . "' AND status_code = '0'");
                    $message_data = "Request Accepted";
                    $notification_data = [
                        'appName' => "Friend APP",
                        'user' => $user, /*Actor*/
                        'targetUser' => $targetUser,
                        'referenceId' => $user_friend[0]->id,
                        'referenceModule' => 'request_accepted',
                        'message' => $message_data,
                        'title' => "Request Accepted"
                    ];

                    $custom_data = ['tab_id' => 'tab_id', 'title' => "Request Accepted", 'message' => $message_data, 'status_code' => '1'];
                    NotificationIdentifier::notificationIdentifier('request_accepted', $notification_data, $custom_data);

                }

                if($request->request_status == 2){
                    $user = User::where('social_id',  $request->receiver_target_social_id)->first();
                    $targetUser = User::where('social_id',$request->sender_user_social_id)->first();
                    DB::select("DELETE FROM notification WHERE target_id = '" . $user->id . "' AND actor_id = '" . $targetUser->id . "' AND status_code = '0'");
                    DB::select("DELETE FROM user_friends WHERE target_social_id = '" . $request->receiver_target_social_id . "' AND user_social_id = '" . $request->sender_user_social_id . "'");
                    $message_data = "Request Rejected";
                    $notification_data = [
                        'appName' => "Friend APP",
                        'user' => $user, /*Actor*/
                        'targetUser' => $targetUser,
                        'referenceId' => $user_friend[0]->id,
                        'referenceModule' => 'request_rejected',
                        'message' => $message_data,
                        'title' => "Request Rejected"
                    ];

                    $custom_data = ['tab_id' => 'tab_id', 'title' => "Request Rejected", 'message' => $message_data, 'status_code' => '2'];
                    NotificationIdentifier::notificationIdentifier('request_rejected', $notification_data, $custom_data);
                }

            }
            return response()->json([
                'code' => 200,
                //  'data' => $user_friend,
                //  'message' => 'user friend list.'
            ], 200);
        } else {
            return response()->json([
                'code' => 400,
                // 'data' => [],
                //   'message' => 'no user found.'
            ], 200);
        }


    }
}
