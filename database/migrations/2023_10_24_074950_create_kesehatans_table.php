<?php

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
        Schema::create('kesehatans', function (Blueprint $table) {
            $table->id();
            $table->text('surat_keterangan_sehat')->nullable();
            $table->text('sertifikat_vaksin')->nullable();
            $table->string('punya_asuransi_kesehatan')->nullable();
            $table->string('jenis_asuransi_kesehatan')->nullable();
            $table->string('nama_asuransi_kesehatan')->nullable();
            $table->string('jenis_pembayaran_asuransi_kesehatan')->nullable();
            $table->text('asuransi_kesehatan_upload')->nullable();
            $table->foreignIdFor(User::class);

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatans');
    }
};
