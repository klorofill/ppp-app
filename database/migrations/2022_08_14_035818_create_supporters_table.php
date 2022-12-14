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
        Schema::create('supporters', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->char('name', 100);
            $table->char('nohp', 100);
            $table->char('village_id');
            $table->string('domisili');
            $table->unsignedBigInteger('candidate_id');

            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');

            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            
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
        Schema::dropIfExists('supporters');
    }
};
