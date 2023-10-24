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
        Schema::create('akademiks', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('program_studi');
            $table->string('jenjang_program_studi');
            $table->string('semester');
            $table->string('ipk')->nullable();
            $table->text('ipk_upload')->nullable();
            $table->string('transkrip_nilai');
            $table->text('transkrip_nilai_upload');
            $table->foreignIdFor(User::class);

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akademiks');
    }
};
