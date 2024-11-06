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
        Schema::table('app', function (Blueprint $table) {

            $table->string('nome')->nullable()->after('url'); // Adiciona a coluna 'nome' após a coluna 'url'

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('app', function (Blueprint $table) {

            $table->dropColumn('nome'); // Remove a coluna caso a migration seja revertida

        });
    }
};
