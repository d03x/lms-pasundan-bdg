<?php

use App\Models\Siswa;
use App\Models\Tugas;
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
        Schema::create('upload_tugas', function (Blueprint $table) {
            $table->uuid('tugasID')->primary();
            $table->foreignUuid('mata_pelajaran_id')
                ->constrained('mata_pelajarans', 'mapelID')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('siswa_nis');
            $table->foreign('siswa_nis')
                ->references('nis')
                ->on('siswas')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('uploaded_file')->nullable();
            $table->text('uploaded_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_tugas');
    }
};
