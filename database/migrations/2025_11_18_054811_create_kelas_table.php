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
        Schema::create('kelas', function (Blueprint $table) {
            $table->string('kelasID')->primary();
            $table->string('guru_nip');
            $table->foreign('guru_nip')
                ->references('nip')
                ->on('gurus')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('namaKelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
