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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            // $table->foreign('user_id')->constrained('users');
            $table->string('guest_name');
            $table->string('guest_photo')->nullable();
            $table->string('guest_phone');
            $table->string('guest_country');
            $table->string('guest_address');
            $table->string('guest_id_card')->nullable();
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
        Schema::dropIfExists('guests');
    }
};
