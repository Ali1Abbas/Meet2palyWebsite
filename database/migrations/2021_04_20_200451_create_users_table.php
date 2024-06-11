<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->default(0);
            $table->integer('user_group_id')->default(0);
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->integer('age')->default(0);
            $table->date('dob')->nullable();
            $table->string('mobile_no',50)->nullable();
            $table->text('image_url')->nullable();
            $table->string('latitude',100)->nullable();
            $table->string('longitude',100)->nullable();
            $table->enum('status_id',['1','0'])->default('1');
            $table->string('gender',100)->default("male");
            $table->string('email',100)->unique()->nullable();
            $table->string('social_id',255)->nullable();
            $table->string('social_type',100)->nullable();
            $table->string('password',255);
            $table->string('country',100)->nullable();
            $table->string('state',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('zipcode',100)->nullable();
            $table->string('address',100)->nullable();
            $table->longText('about_me')->nullable();
            $table->date('date_of_join')->nullable();
            $table->mediumText('website')->nullable();
            $table->string('device_type',100)->nullable();
            $table->string('device_token',100)->nullable();
            $table->string('device',100)->nullable();
            $table->string('token',100)->nullable();
            $table->date('token_expiry_at')->nullable();
            $table->date('subscription_expiry_date')->nullable();
            $table->string('forgot_password_hash')->nullable();
            $table->date('forgot_password_hash_date')->nullable();
            $table->integer('subscription_id')->default(0);
            $table->integer('occupation_id')->default(0);
            $table->integer('platform_id')->default(0);
            $table->string('platform_type')->nullable();
            $table->string('user_timezone')->nullable();
            $table->string('user_reference_code')->nullable();
            $table->string('reference_code')->nullable();
            $table->integer('login_count')->default(0);
            $table->integer('user_type')->default(0);

            $table->enum('is_email_verify',['1','0'])->default('0');
            $table->dateTime('email_verify_at')->nullable();
            $table->enum('is_mobile_verify',['1','0'])->default('0');
            $table->dateTime('mobile_verify_at')->nullable();
            $table->enum('online_status',['1','0'])->default('0');
            $table->string('mobile_otp',100)->nullable();
            $table->string('email_otp',100)->nullable();
            $table->rememberToken();
            $table->dateTime('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();

            $table->index(['email'],'index1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
