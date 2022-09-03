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
        Schema::create('quickqounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('suara');
            $table->unsignedBigInteger('votingplace_id');
            $table->unsignedBigInteger('candidate_id');

            $table->foreign('votingplace_id')->references('id')->on('votingplaces')->onDelete('cascade');
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
        Schema::dropIfExists('quickqounts');
    }
};
