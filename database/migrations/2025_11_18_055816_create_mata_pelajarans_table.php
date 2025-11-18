<?php

use App\Models\Guru;
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
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->string('mapelID')->primary();
            $table->string('namaMapel', 120);
            $table->string('kelas_id');
            $table->foreign('kelas_id')
                ->references('kelasID')
                ->on('kelas')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('guru_nip');
            $table->foreign('guru_nip')
                ->references('nip')
                ->on('gurus')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->enum('jenis', ['pilihan', 'wajib']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_pelajarans');
    }
};
