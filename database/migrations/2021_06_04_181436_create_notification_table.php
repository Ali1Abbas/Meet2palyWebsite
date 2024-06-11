<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id');
            $table->string('notification_identifier_id');
            $table->integer('actor_id');
            $table->enum('actor_type',['users','cms_users'])->default('users');
            $table->integer('target_id');
            $table->enum('target_type',['users','cms_users'])->default('users');
            $table->enum('type',['push','email'])->default('push');
            $table->integer('reference_id');
            $table->string('reference_module');
            $table->string('title');
            $table->text('description');
            $table->text('web_redirect_link')->nullable();
            $table->longText('custom_data')->nullable();
            $table->tinyInteger('is_notify')->default(1);
            $table->integer('status_code')->nullable();
            $table->tinyInteger('is_read')->default('0');
            $table->tinyInteger('is_viewed')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification');
    }
}
