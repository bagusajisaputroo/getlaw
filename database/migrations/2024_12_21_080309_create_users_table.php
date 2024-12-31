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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('role')->default('admin'); // Ganti 'user' dengan peran yang sesuai
            $table->unsignedBigInteger('books_id')->default(0)->constrained('Books')->onDelete('cascade');
            $table->timestamps(); // Menghasilkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
