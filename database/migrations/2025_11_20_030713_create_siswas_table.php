<?php

use App\Models\Kelas;
use App\Models\User;
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
        Schema::create('siswas', function (Blueprint $table) {
            $table->string('nis', 17)->primary();
            $table->string('nama_lengkap');
            $table->year('angkatan')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->foreignIdFor(User::class)->unique()->constrained('users');
            $table->foreignIdFor(Kelas::class)->constrained('kelas');
            $table->string('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
