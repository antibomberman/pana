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
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->tinyInteger('status')->default(1);
            $table->string('name');
            $table->longText('description')->nullable()->comment('Описание объекта');

            //dashboard Основная информация
            $table->integer('max_floor')->default(1)->comment('этаж');
            $table->tinyInteger('star')->nullable()->comment('Количество звезд');

            $table->string('contact_person')->nullable()->comment('Контактное лицо');
            $table->string('phone')->nullable()->comment('Контактный номер телефона');
            $table->string('alt_phone')->nullable()->comment('Альтернативный номер телефона');

            $table->boolean('represent_management')->default(1)->comment('Вы представляете управляющую компанию, или ваш объект размещения — часть группы или сети?');
            $table->string('company_name')->nullable()->comment('Название компании, группы или сети');

            //Где находится ваш объект?
            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
            $table->string('address')->nullable();
            $table->string('alt_address')->nullable();
            $table->decimal('lat', 11, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->string('postal_code')->nullable()->comment('Почтовый индекс');

            //Планировка и цены
            $table->enum('cancel_fine_day', ['arrival', '1', '2', '3', '7', '14', '30'])->nullable()->comment('отменить бронирование');
            $table->enum('required_pay', ['full', 'first'])->nullable()->comment('гостям будет необходимо оплатить 100%');

            //Парковка
            $table->enum('parking', ['no', 'yes_free', 'yes_paid'])->nullable();
            $table->enum('parking_property', ['private', 'public'])->nullable()->comment('Частная или Общественная');
            $table->enum('parking_location', ['inside', 'outside'])->nullable()->comment('На территории или За пределами территории');
            $table->enum('parking_booking', ['booking', 'no_booking'])->nullable()->comment('Нужно бронировать или Не нужно бронировать');
            $table->float('parking_price')->nullable()->comment('Цена за парковочное место');
            //Завтрак
            $table->enum('breakfast', ['no', 'yes_free', 'yes_by_request'])->nullable();

            $table->boolean('children_allowed')->default(1)->comment('Размещение детей');
            //Домашние животные
            $table->enum('pet', ['yes', 'no', 'by_request'])->default('yes')->comment('Размещение домашних животных');
            $table->boolean('pet_charge')->default(1)->comment('дополнительная плата');
            $table->float('pet_price')->nullable()->comment('плата за домашних животных');
            //Время Регистрации
            $table->time('check_in_from')->nullable()->comment('Регистрация заезда  с');
            $table->time('check_in_before')->nullable()->comment('Регистрация заезда  До');
            $table->time('check_out_from')->nullable()->comment('Регистрация отъезда с');
            $table->time('check_out_before')->nullable()->comment('Регистрация отъезда До');

            //Оплата
            $table->boolean('pos_terminal')->nullable();
            //Какое название должно быть указано в счетах ?
            $table->string('invoice_name')->nullable();
            $table->string('invoice_company_name')->nullable();

            $table->boolean('recipient_invoice')->default(1)->comment('У получателя счетов тот же адрес');
            $table->foreignId('recipient_invoice_city_id')->nullable()->comment('Город получателя счетов')->constrained('cities')->cascadeOnDelete();
            $table->string('recipient_invoice_address')->nullable()->comment('Адрес получателя счетов');
            $table->string('recipient_invoice_postal_code')->nullable()->comment('Почтовый индекс получателя счетов');
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
        Schema::dropIfExists('housings');
    }
};
