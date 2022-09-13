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
        Schema::create('housing_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('housing_id')->constrained('housings')->cascadeOnDelete();
            $table->string('path');
            $table->integer('position')->nullable()->comment('для сортировки');
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
        Schema::dropIfExists('housing_images');
    }
};
