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
    Schema::table('alumnes', function (Blueprint $table) {
        $table->foreignId('ensenyament_id')->nullable()->constrained('ensenyaments')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
public function down(): void
{
    Schema::table('alumnes', function (Blueprint $table) {
        $table->dropForeign(['ensenyament_id']);
        $table->dropColumn('ensenyament_id');
    });
}
};
