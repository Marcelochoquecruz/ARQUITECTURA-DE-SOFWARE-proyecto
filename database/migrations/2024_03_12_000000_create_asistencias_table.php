<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mienbro_id')->constrained('mienbros')->onDelete('cascade');
            $table->date('fecha');
            $table->boolean('asistio')->default(true);
            $table->text('observacion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
};
