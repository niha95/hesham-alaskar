<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name'); 
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('email')->nullable(); 
            $table->longtext('description')->nullable();
            $table->longtext('keywords')->nullable(); 
            $table->longtext('social_media')->nullable();
            $table->string('video_url')->nullable();
            $table->string('breadcrumb_img')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
