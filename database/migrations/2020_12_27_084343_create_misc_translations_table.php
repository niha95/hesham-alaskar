<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMisctranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misc_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->string('sitename');
            $table->text('about');
            $table->text('site_word');
            $table->text('vision');
            $table->string('appointment_date');
            $table->foreignId('misc_id')->constrained('miscs')->onDelete('cascade');
            $table->unique(['misc_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('misc_translations');
    }
}
