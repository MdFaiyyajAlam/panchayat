<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoogleReCAPTCHASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('google_re_c_a_p_t_c_h_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('site_key')->nullable();
            $table->string('secret_key')->nullable();
            $table->string('language')->nullable();
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
        Schema::dropIfExists('google_re_c_a_p_t_c_h_a_s');
    }
}
