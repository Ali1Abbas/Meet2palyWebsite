<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_friends', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->default(0);
            $table->string("user_social_id")->nullable();
            $table->string("target_social_id")->nullable();
            $table->integer("target_id")->default(0);
            $table->integer("user_relation_id")->default(0);
            $table->integer("target_relation_id")->default(0);
            $table->integer("is_friend")->default(1);
            $table->dateTime('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_friends');
    }
}
