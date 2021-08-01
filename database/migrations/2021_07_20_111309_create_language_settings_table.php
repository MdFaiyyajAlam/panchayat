<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_settings', function (Blueprint $table) {
            $table->id();
            $table->string('language_name')->nullable();
            $table->string('short_form')->nullable();
            $table->string('language_code')->nullable();
            $table->boolean('menu_order')->nullable();
            $table->string('text_editor_language')->nullable();
            $table->string('text_direction')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('language_settings');
    }
}
