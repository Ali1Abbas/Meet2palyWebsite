<?php

namespace App\Http\Controllers\Api;


use App\Models\Advertisement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController
{
    public function social(Request $request)
    {

        if ($request['social_type'] == 'apple') {
            if ($request->email != "") {
                $user_data = DB::select("SELECT * FROM users WHERE email = '" . $request->email . "'");
                if (count($user_data) > 0) {
                    if ($user_data[0]->social_type != "") {
                        return $this->__sendErrorResponse("Validation Error", "This email is already registered with " . ucwords(str_replace("_", " ", $user_data[0]->social_type)), 404);
                    } else {
                        return $this->__sendErrorResponse("Validation Error", "This email is already registered.", 404);
                    }

                }
            }

        }

        if ($request['social_type'] != 'apple') {
            $user_data = DB::select("SELECT * FROM users WHERE email = '" . $request->email . "'");
            if (count($user_data) > 0) {
                if ($user_data[0]->social_type != $request['social_type']) {
                    return $this->__sendErrorResponse("Validation Error", "This email is already registered with " . ucwords(str_replace("_", " ", $user_data[0]->social_type)), 404);
                }
            }
        }

        $user_response = User::getBySocial($request->all());


        if (!empty($user_response)) {



            if ($user_response->status_id == 0) {
                return $this->__sendErrorResponse("Validation Error", "These credentials do not match our records.", 404);
            }

            $name = explode(' ', isset($request['name']) ? $request['name'] : '');

            $first_name = isset($name[0]) ? $name[0] : '';
            $last_name = isset($name[1]) ? $name[1] : '';

            $update_user_data = array();
            $update_user_data['login_count'] = $user_response->login_count + 1;
            $update_user_data['device_type'] = $request->device_type;
            $update_user_data['device_token'] = $request->device_token;

            if ($first_name != "") {
                $update_user_data['first_name'] = $first_name;
            }

            if ($last_name != "") {
                $update_user_data['last_name'] = $last_name;
            }

            if ($request->email != "") {
                $update_user_data['email'] = $request->email;
            }

            $update_user_data['social_type'] = $request->social_type;
            $update_user_data['social_id'] = $request->social_id;
            $update_user_data['device'] = $request->device;

            User::where('id', $user_response->id)->Update($update_user_data);
            $user_response = User::getBySocial($request->all());

            $mail_params['USER_NAME'] = $request['name'];
            //$mail_params['CONFIRMATION_LINK'] = env('APP_URL')."/user/registration/$hash";

            //$mail_params['USER_LINK'] = env('APP_URL').'/user/login';
            $mail_params['APP_NAME'] = env('APP_NAME');

            // make forgot password url and implement its email configuration.
            //$this->__sendMail('user_registration_email', $request->email, $mail_params);


            $notification_count = DB::select("SELECT count(*) as notification_count FROM notification WHERE target_id = '" . $user_response->id . "' AND is_read = '0' ");
            if(isset($notification_count) && $notification_count[0]->notification_count > 0){
                $notification_count_data = $notification_count[0]->notification_count;
            }else{
                $notification_count_data = 0;
            }

            $data['username'] = $user_response->first_name.' '.$user_response->last_name;
            $data['social_id'] = $user_response->social_id;
            $data['social_type'] = $user_response->social_type;
            $data['token'] = $user_response->token;
            $data['login_count'] = $user_response->login_count;
            $notification_count = 0;
            return response()->json([
                'code' => 200,
                'data' => $data,
                'notification_count' => $notification_count_data,
                //  'message' => 'user friend list.'
            ], 200);

            $this->__is_collection = false;
            $this->__is_paginate = false;
            return $this->__sendResponse('User', $user_response, 200, 'User already exists.');
        }


        $obj_user = new User();

        $name = explode(' ', isset($request['username']) ? $request['username'] : '');

        $obj_user->first_name = $name[0];
        $obj_user->first_name = $name[0];
        $obj_user->last_name = isset($name[1]) ? $name[1] : '';

        $obj_user->social_id = $request['social_id'];
        $obj_user->social_type = $request['social_type'];

        $obj_user->user_type = 1;
        $obj_user->token = User::getToken();

        $obj_user->save();


        $user = User::getById($obj_user->id);

        $this->__is_collection = false;
        $this->__is_paginate = false;

//        $this->_btAddCustomer($request, $user[0]);
        $notification_count = 0;
        return response()->json([
            'code' => 200,
            'notification_count' => $notification_count,
            //  'message' => 'user friend list.'
        ], 200);
        return $this->__sendResponse('User', $user, 201, 'Social user has been added successfully.');
    }

    public function checkUserRegistration(Request $request)
    {
        $user_friend = DB::select("SELECT * FROM users WHERE social_id = '" . $request->user_social_id . "'");
        if ($user_friend && count($user_friend) > 0) {
            return response()->json([
                'code' => 200,
            ], 200);
        } else {
            return response()->json([
                'code' => 400,
            ], 200);
        }

    }


    public function advertisementsList(Request $request)
    {
        //$advertisements = DB::select("SELECT * FROM advertisements ORDER BY id DESC");
        $advertisements = Advertisement::orderBy("id","DESC")->get();
        foreach ($advertisements as $advertisement){
            $data['id'] = $advertisement->id;
            $data['title'] = $advertisement->title;
            $data['description'] = $advertisement->description;
            $data['image'] = $advertisement->cover_image;
            $data['click_count'] = $advertisement->click_count;
            $data['url'] = $advertisement->url;
            $data['created_at'] = $advertisement->created_at;
            $data['updated_at'] = $advertisement->updated_at;
            $data2[]=$data;
        }
        $data = [
            'advertisements' => $data2,
        ];

        if ($advertisements && count($advertisements) > 0) {
            return response()->json([
                'code' => 200,
                'data' => $data2,
                'message' => 'advertisements list.'
            ], 200);
        } else {
            return response()->json([
                'code' => 400,
                'data' => [],
                'message' => 'no advertisements found.'
            ], 200);
        }

    }

    public function updateAdvertisementClickCount(Request $request)
    {
        DB::select("UPDATE advertisements SET click_count = click_count+1 WHERE id = '".$request->id."'");
        return response()->json([
            'code' => 200,
            //  'data' => $user_friend,
            //  'message' => 'user friend list.'
        ], 200);
    }

}
