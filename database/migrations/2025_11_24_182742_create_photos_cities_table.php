<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('city_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            //Caminho relativo do arquivo dentro do storage
            $table->string('object_key');
            $table->string('caption')->nullable();
            // Indica se a foto é a capa da cidade
            $table->boolean('is_cover')->default(false);
            $table->unsignedSmallInteger('display_order')->default(1);

            $table->string('provider')->default('local');

            $table->string('mime_type')->nullable();
            $table->unsignedInteger('file_size')->nullable();

            $table->unsignedSmallInteger('width')->nullable();
            $table->unsignedSmallInteger('height')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('photos_cities');
    }
};
