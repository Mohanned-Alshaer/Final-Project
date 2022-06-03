<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('Facebook');
            $table->string('Instagram');
            $table->string('Whatsapp');
            $table->string('Twiter');
            $table->timestamps();
        });
    }
    // $table->string('country');
    // $table->string('city');
    // $table->string('street');
    // $table->string('area');
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socials');
    }
};
