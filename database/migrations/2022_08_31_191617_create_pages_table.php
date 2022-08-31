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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title')->default('Покер онлайн - играть в покер на деньги и бесплатно - ПокерОК');
            $table->string('description')->default('Играть в покер онлайн на ПокерОК🔥 Получи бонус на первый депозит до $600 🏆 Крупнейший онлайн покер-рум ✅ Регистрируйся бесплатно и начинай игру');
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
        Schema::dropIfExists('pages');
    }
};
