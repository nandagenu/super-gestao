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
        Schema::create('produtos_detalhes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained();
            $table->unique('produto_id');
            $table->foreignId('unidade_id')->constrained();
            $table->float('comprimento', 8, 2);
            $table->float('largura', 8, 2);
            $table->float('altura', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos_detalhes', function (Blueprint $table)
        {
            $table->dropConstrainedForeignId('unidade_id');
            $table->dropConstrainedForeignId('produto_id');

        Schema::dropIfExists('produtos_detalhes');
    });
    }
};