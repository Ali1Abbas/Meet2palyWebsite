<?php

namespace App\Models;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class User extends Model
{
    protected $table = "users";

    public static function  createAgent($user)
    {
        $obj = new static();
        //print_r($user);exit;

        $obj->first_name    = $user['first_name'];
        $obj->last_name     = $user['last_name'];
        $obj->email         = $user['email'];
        $obj->image_url     = $user['system_image_url'];
        $obj->dob  = $user['dob'];
        $obj->mobile_no  = $user['phone_number'];
        $obj->occupation_id  = $user['occupation_id'];
        /*$obj->age           = $user['age'];
        $obj->gender        = $user['gender'];*/
        $obj->password      = $user['password'];
        //$obj->user_group_id = 2;
        //$obj->company_id    = $user['company_id'];
        $obj->forgot_password_hash    = $user['forgot_password_hash'];
        $obj->forgot_password_hash_date    = $user['forgot_password_hash_date'];
        $obj->token         = self::getToken();
        /*$obj->device_type   = $user['device_type'];
        $obj->device_token  = $user['device_token'];
        $obj->device        = $user['device'];*/

        $obj->save();

        return $obj->id;
    }

    public static function  createManagerUser($user)
    {
        $obj = new static();
        $obj->first_name    = $user['first_name'];
        $obj->last_name     = $user['last_name'];
        $obj->email         = $user['email'];
        $obj->password      = $user['password'];
        $obj->device_type      = $user['device_type'];
        $obj->device_token      = $user['device_token'];
        $obj->forgot_password_hash    = $user['forgot_password_hash'];
        $obj->user_reference_code      = $user['reference_code'];
        $obj->forgot_password_hash_date    = $user['forgot_password_hash_date'];
        $obj->token         = self::getToken();
        $obj->user_group_id = 2; //Role for manager || user_group_id for manager
        $obj->save();

        return $obj->id;
    }

    public static function  createAppUser($user)
    {
        if(isset($user['social_id']) && $user['social_id'] != ''){
            if($user['platform_type']  == "apple"){
                $user_exist = DB::select("SELECT count(*) as total,id, login_count FROM `users` WHERE social_id = '".$user['social_id']."'");
            }else{
                $user_exist = DB::select("SELECT count(*) as total,id, login_count FROM `users` WHERE email = '".$user['email']."'");
            }

            if($user_exist[0]->total > 0){
                $data['login_count'] = ($user_exist[0]->login_count+1);
                User::where(['id' => $user_exist[0]->id])->update($data);
                return $user_exist[0]->id;
            }else{

                $obj = new static();
                $obj->user_type    = 1;
                $obj->first_name    = $user['first_name'];
                $obj->last_name     = $user['last_name'];
                $obj->email         = $user['email'];
                $obj->social_id         = $user['social_id'];
                $obj->platform_id         = $user['platform_id'];
                $obj->platform_type         = $user['platform_type'];
                $obj->image_url         = $user['image_url'];
                $obj->password      = $user['password'];
                $obj->device_type      = $user['device_type'];
                $obj->device_token      = $user['device_token'];
                $obj->forgot_password_hash    = $user['forgot_password_hash'];
                $obj->forgot_password_hash_date    = $user['forgot_password_hash_date'];
                $obj->user_timezone = $user['user_timezone'];
                $obj->token         = self::getToken();
                $obj->user_reference_code = $user['user_reference_code'];
                $obj->reference_code = $user['reference_code'];
                $obj->user_type = 1;
                $obj->save();
                return $obj->id;
            }
        }

        $obj = new static();
        $obj->first_name    = $user['first_name'];
        $obj->user_type    = 1;
        $obj->last_name     = $user['last_name'];
        $obj->email         = $user['email'];
        $obj->password      = $user['password'];
        $obj->device_type      = $user['device_type'];
        $obj->device_token      = $user['device_token'];
        $obj->forgot_password_hash    = $user['forgot_password_hash'];
        $obj->user_reference_code = $user['user_reference_code'];
        $obj->reference_code = $user['reference_code'];
        $obj->forgot_password_hash_date    = $user['forgot_password_hash_date'];
        $obj->user_timezone = $user['user_timezone'];
        $obj->user_type = 1;
        $obj->token         = self::getToken();
        $obj->save();

        return $obj->id;
    }

    public static function createBusiness($user)
    {

        $obj = new static();

        $name = explode(' ', $user['name']);

        $obj->first_name    = $name[0];
        $obj->last_name     = isset($name[1]) ? $name[1] : '';
        $obj->email         = $user['email'];
        $obj->password      = $user['password'];
        $obj->image_url      = $user['system_image_url'];

        $obj->user_group_id = 1;

        $obj->city = $user['city'];
        $obj->state = $user['state'];

        $obj->website = $user['website'];
        $obj->about_me = $user['description'];

        $obj->token         = self::getToken();
        $obj->device_type   = $user['device_type'];
        $obj->device_token  = $user['device_token'];
        $obj->device        = $user['device'];
        $obj->address       = $user['address'];

        $obj->save();

        return $obj->id;
    }

    public static function createUserSetting($user_id)
    {
        \DB::statement("INSERT INTO user_setting (SELECT id, $user_id, `value`, NOW(), NOW() FROM setting
                        WHERE key_type = 'user')");
        return true;
    }

    public static function getUserSetting($user_id)
    {
        $query = \DB::table('user_setting');
        $query->select('user_setting.*', 'setting.key');
        $query->leftJoin('setting', 'setting.id', 'user_setting.setting_id');
        $query->where('user_id', $user_id);
        return $query->get();
    }

    public static function updateUserSetting($params)
    {
        $qry_params = [];

        $user_id = $params['user_id'];
        $setting_id = $params['setting_id'];
        $value = $params['value'];


        foreach($params as $column => $row){
            $qry_params[] = " $column = '$row' ";
        }

        \DB::statement("UPDATE user_setting SET value = $value WHERE user_id = $user_id AND setting_id = $setting_id");
        return true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    public static function getToken()
    {
        return md5(Config::get('constants.APP_SALT').time());
    }

    public static function getById($id){
        $query = self::select();
        return $query->where('id', $id)
            ->first();
    }

    public static function getByDeviceToken($device_token){

        $query = self::select();
        return $query->where('device_token', $device_token)
            ->limit(1)
            ->get();
    }

    public static function getByEmail($email){

        $query = self::select();
        return $query->where('email', $email)
            ->limit(1)
            ->get();
    }

    public static function getByEmail2($email){

        $query = self::select();
        return $query->where('email', $email)
            ->where('user_type',0)
            ->limit(1)
            ->get();
    }

    public static function getBySocial($params){


        $query = self::select();
        return $query->where('social_id', $params['social_id'])
            ->where('social_type', $params['social_type'])
            ->first();
    }
    public static function getBySocialEmail($params){
        $query = self::select();
        return $query->where('email', $params['email'])
            ->where('user_type',1)
            ->whereNull('deleted_at')
            ->first();
    }

    public static function getByPasswordHash($hash){

        $query = self::select();
        return $query->where('forgot_password_hash', $hash)
            ->get();
    }

    public static function auth($token){

        if(empty($token))
            return false;

        $query = self::select();
        $result = $query->whereRaw("token = '$token'")
            //->where('status_id',1)
            ->whereNull('deleted_at')
            ->first();

        if(!is_null($result) && $result->count())
            return $result;

        return false;
    }

    public static function updateByEmail($email, $data){

        $qry_params = [];

        foreach($data as $column => $row){
            $qry_params[] = " $column = '$row' ";
        }

        \DB::statement('UPDATE user SET ' . implode(', ', $qry_params) . " WHERE email = '$email'");
        return true;
    }

    public static function login($email, $password){

        $query = self::select();
        return $query->where('email', $email)
            ->where('password', $password)
            ->where('status_id', 1)
            ->where('user_type', 1)
            ->whereNull('deleted_at')
            ->first();
    }

    public static function loginWeb($email, $password){

        $query = self::select();
        return $query->where('email', $email)
            ->where('password', $password)
            ->where('status_id', 1)
            ->where('user_type', 0)
            ->whereNull('deleted_at')
            ->first();
    }

    public static function loginById($user_id, $password){

        $query = self::select();
        return $query->where('id', $user_id)
            ->where('password', $password)
            ->get();
    }

    public static function getUserList($param)
    {
        $lat = $param['latitude'];
        $lng = $param['longitude'];
        $radius = $param['radius'];

        $haversine = "(6371 * acos (
                    cos ( radians($lat) )
                    * cos( radians(`latitude`) )
                    * cos( radians(`longitude`) - radians($lng) )
                    + sin ( radians($lat) )
                    * sin( radians(`latitude`) )
                ))";


        $query = \DB::table('users');
        $query->select('users.*');

        if(!empty($param['user_group_id']))
            $query->where('user_group_id', $param['user_group_id']);

        if(!empty($param['name'])) {
            $query->whereRaw("((first_name like '%" . $param['name'] . "%' OR last_name like '%" . $param['name'] . "%') OR " .
            "CONCAT(`first_name`, ' ', `last_name`)" . ' LIKE '. "'%".$param['name']."%')");
        }
        if(!empty($param['latitude']) && !empty($param['longitude']))
            $query->selectRaw("{$haversine} AS distance")
                ->whereRaw("{$haversine} < ?", [$radius]);

        // HAVING distance < 30 ORDER BY distance

        return $query->paginate(Config::get('constants.PAGINATION_PAGE_SIZE'));
    }

    public static function getTenantUserList($param)
    {
        //print_r($param);exit;

        $query = \DB::table('users');
        $query->select('users.*',\DB::raw( "0 as lead_percentage"),\DB::raw("0 as lead_count"));
        $query->where('company_id', $param['company_id']);
        $query->where('user_group_id', 2); // agent user group id

        if(!empty($param['name']))
            $query->whereRaw("(first_name like '%". $param['name']."%' OR last_name like '%". $param['name']."%')");

        return $query->get();
    }

    public static function verifySubscription($user_id, $user_group_id, $subscription_expiry_date)
    {
        if($user_group_id != 2)
            return 0;

        $date_now = date("Y-m-d");

        if ($date_now <= $subscription_expiry_date)
            return 1;

        \DB::statement("UPDATE user SET user_group_id = 1 WHERE id = $user_id");
        return 0;
    }

    public static function getSubscriptionStatus($user_id)
    {
        $user = self::getById($user_id);

        $user_group_id = ($user[0]['user_group_id']);

        if($user_group_id != 2)
            return false;

        return true;
    }

    public static function updateFields($fields, $where_clause)
    {
        $field_value = [];
        foreach ($fields as $key => $field){
            $field_value[] = "$key = '$field'";
        }

        $clause_field_value = [];
        foreach ($where_clause as $key => $field){
            $clause_field_value[] = "$key = '$field'";
        }

        \DB::statement('Update user set ' . implode(', ', $field_value) . ' WHERE ' . implode(' AND ', $clause_field_value));

        return true;
    }

    public static function getLanguages()
    {
        $query = \DB::table('languages');
        $query->select('languages.*');
        return $query->paginate(Config::get('constants.PAGINATION_PAGE_SIZE'));
    }
}
