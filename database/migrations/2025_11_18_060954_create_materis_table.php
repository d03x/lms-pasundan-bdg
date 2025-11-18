<?php

use App\Models\MataPelajaran;
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
        Schema::create('materis', function (Blueprint $table) {
            $table->uuid('materiID')->primary();
            $table->string('mata_pelajaran_id');
            $table->foreign('mata_pelajaran_id')
                ->references('mapelID')
                ->on('mata_pelajarans')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('fileMateri')->nullable();
            $table->text('description')->nullable();
            $table->string('videoLink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
