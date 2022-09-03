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
        Schema::create('dapils', function (Blueprint $table) {
            $table->id();
            $table->char('code', 3);
            $table->json('kecamatan');
            $table->char('regency_id');
            $table->foreign('regency_id')
                ->references('id')
                ->on('regencies')
                ->onDelete('cascade');
            // $table->foreign('regency_id')->references('id')->on('regencies')->onDelete('cascade');
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
        Schema::dropIfExists('dapils');
    }
};
