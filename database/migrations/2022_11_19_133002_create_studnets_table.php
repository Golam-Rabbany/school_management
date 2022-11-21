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
        Schema::create('studnets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('fname');
            $table->string('mname');
            $table->string('address');
            $table->date('birth');
            $table->integer('national_id');
            $table->string('blood');
            $table->string('last_admission');
            $table->integer('class_id');
            $table->integer('shift_id');
            $table->foreignId('batch_id')->constrained('groups')->onDelete('cascade');
            $table->integer('roll');
            $table->integer('reg');
            $table->string('photo');
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
        Schema::dropIfExists('studnets');
    }
};
