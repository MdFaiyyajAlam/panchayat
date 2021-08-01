<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteFontSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_font_settings', function (Blueprint $table) {
            $table->id();
            $table->string('language')->nullable();
            $table->string('primary_font')->nullable();
            $table->string('secondary_font')->nullable();
            $table->string('tertiary_font')->nullable();
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
        Schema::dropIfExists('site_font_settings');
    }
}
