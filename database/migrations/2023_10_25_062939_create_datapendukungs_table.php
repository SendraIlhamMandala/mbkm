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
        Schema::create('datapendukungs', function (Blueprint $table) {
            $table->id();
            $table->text('pengalaman_organisasi')->nullable();
            $table->text('sertifikat_prestasi')->nullable();
            $table->text('ktp')->nullable();
            $table->text('cv')->nullable();
            $table->foreignIdFor(User::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapendukungs');
    }
};
