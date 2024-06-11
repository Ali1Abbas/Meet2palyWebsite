<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notification";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['notification_identifier_id','actor_id','target_id','reference_id','reference_module','type','title',
        'description','is_notify', 'is_read', 'is_viewed', 'created_at','updated_at','deleted_at','status_code'];

    public static function getById($id){
        $query = self::select();
        return $query->where('id', $id)->first();
    }
}
