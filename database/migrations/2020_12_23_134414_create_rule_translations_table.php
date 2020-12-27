<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rule_translations', function (Blueprint $table) {
            $table->id('id');
            $table->string('locale')->index();
            $table->string('name');
            $table->text('description');
            $table->foreignId('rule_id')->constrained('rules')->onDelete('cascade');
            $table->unique(['rule_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rule_translations');
    }
}
