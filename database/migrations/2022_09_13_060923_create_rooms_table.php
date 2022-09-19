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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('housing_id')->constrained('housings')->cascadeOnDelete();
            $table->foreignId('room_type_id')->constrained('room_types')->cascadeOnDelete();
            $table->foreignId('room_name_id')->constrained('room_names')->cascadeOnDelete();
            $table->float('size')->nullable()->comment('размер м²');
            $table->float('base_price')->comment('Базовая цена');
            $table->boolean('smoking')->default(1)->comment('Курение');
            $table->boolean('disabled_people')->default(1)->comment('Номер предназначен для инвалидов');
            $table->tinyInteger('count_copy')->nullable()->comment('Количество номеров (этого типа)');
            $table->tinyInteger('max_people')->default(2)->comment('Сколько гостей могут остановиться в этой комнате');
            $table->tinyInteger('max_adult_count')->default(2)->comment('вместимость взрослых');
            $table->tinyInteger('max_child_count')->default(1)->comment('вместимость детей');
            $table->tinyInteger('max_baby_count')->default(0)->comment('вместимость младенец');
            $table->tinyInteger('max_ped_count')->default(0)->comment('вместимость животных');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
