<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserApiTokenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_api_token', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('api_token',255)->unique();
            $table->string('refresh_token',255)->unique();
            $table->string('udid',255);
            $table->string('device_type',100)->nullable();
            $table->text('device_token')->nullable();
            $table->string('platform_type',100)->default('custom');
            $table->string('platform_id',255)->nullable();
            $table->string('ip_address',50)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->index('api_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_api_token');
    }
}
