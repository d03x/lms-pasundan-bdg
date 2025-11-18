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
        Schema::create('tugas', function (Blueprint $table) {
            $table->uuid('tugasID')->primary();
            $table->string('mata_pelajaran_id');
            $table->foreign('mata_pelajaran_id')
                ->references('mapelID')
                ->on('mata_pelajarans')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->text('deskripsi');
            $table->dateTime('deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
