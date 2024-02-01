<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('cod_inv', 50);
            $table->string('categoria_activo', 100);
            $table->string('nombre', 150);
            $table->string('marca', 150);
            $table->string('modelo', 150);
            $table->string('serial', 150);
            $table->string('area_asignada');
            $table->string('responsable', 150);
            $table->string('observacion');
            $table->timestamp(column:'created_at')->useCurrent();
            $table->timestamp(column:'updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
