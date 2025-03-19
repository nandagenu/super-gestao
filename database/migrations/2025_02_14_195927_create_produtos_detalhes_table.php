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
            //colunas
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('unidade_id');
            $table->float('comprimento', 8, 2);
            $table->float('largura', 8, 2);
            $table->float('altura', 8, 2);
            $table->timestamps();

            //foreign key produtos->produto_detalhes 1:1
            $table->foreign('produto_id')->references('id')->on('produtos'); //coluna que vai receber a chave estrangeira
            $table->unique('produto_id'); // define a tabela sendo 1:1, no qual 1 único "produtos" tenha 1 único "produto_detalhes" associado

            //foreign key unidades->produto_detalhes N:1
            $table->foreign('unidade_id')->references('id')->on('unidades');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos_detalhes', function (Blueprint $table)
        {
            $table->dropForeign('produtos_detalhes_unidade_id_foreign');
            $table->dropForeign('produtos_detalhes_produto_id_foreign');
            $table->dropColumn('unidade_id');
            $table->dropColumn('produto_id');
        });

        Schema::dropIfExists('produtos_detalhes');
    }
};
