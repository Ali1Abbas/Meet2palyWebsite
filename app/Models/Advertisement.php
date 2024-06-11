<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Advertisement extends Model
{
    use SoftDeletes,CRUDGenerator;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advertisements';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["slug","title","description","url","image","click_count","created_at"];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * It is used to enable or disable DB cache record
     * @var bool
     */
    protected $__is_cache_record = true;

    /**
     * @var
     */
    protected $__cache_signature;

    /**
     * @var string
     */
    protected $__cache_expire_time = 1; //days


    /**
     * This function is used to generate unique username
     * @param string $username
     * @return string $username
     */
    public static function generateUniqueSlug($title)
    {
        $username = Str::slug($title);
        $query = self::where('username',$title)->count();
        if( $query > 0){
            $username = $username . $query . rand(111,999);
        }
        return Str::slug($username);
    }

    public function getCoverImageAttribute($image)
    {
        if (Storage::exists($this->image)) {
            return Storage::disk('s3')->url($this->image);
        }

        return asset("default_images/upload-image-holder.png");
    }
}
