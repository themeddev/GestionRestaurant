<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('serveurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->datetime('date_embauche');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('serveurs');
    }
};
