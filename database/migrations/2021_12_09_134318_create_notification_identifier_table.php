<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationIdentifierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_identifier', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->nullable();
            $table->enum('notification_type',['push','email','none','web'])->nullable();
            $table->enum('send_type',['actor','target','both'])->nullable();
            $table->string('title')->nullable();
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('notification_identifier');
    }
}
