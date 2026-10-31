<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('description')->nullable()->after('subtitle');
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->text('description')->nullable()->after('subtitle');
        });

        DB::table('projects')->where('title', 'SmartCane')->update([
            'description' => 'SmartCane adalah alat untuk membantu tunanetra berjalan lebih aman, dengan deteksi halangan di sekitar pengguna.',
        ]);
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
