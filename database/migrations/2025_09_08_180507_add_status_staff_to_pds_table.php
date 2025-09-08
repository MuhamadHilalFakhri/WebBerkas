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
        Schema::table('pds', function (Blueprint $table) {
            $table->string('status')->default('baru')->after('keterangan');
            $table->unsignedBigInteger('staff_id')->nullable()->after('status');
        });
    }

    public function down(): void
    {
        Schema::table('pds', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('staff_id');
        });
    }
};
