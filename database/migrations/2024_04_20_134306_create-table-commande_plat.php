<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commande_plat', function (Blueprint $table) {
            $table->unsignedBigInteger('commande_id');
            $table->unsignedBigInteger('plat_id');
            $table->integer('nombre')->unsigned()->default(1);

            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');
            $table->foreign('plat_id')->references('id')->on('plats')->onDelete('cascade');

            $table->primary(['commande_id', 'plat_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commande_plat');
    }
};
