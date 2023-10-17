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
        Schema::table('users', function (Blueprint $blueprint){
            $blueprint->string('position')->nullable()->after('email_verified_at');
            $blueprint->string('company')->nullable()->after('email_verified_at');
            $blueprint->string('lastname')->nullable()->after('email_verified_at');
            $blueprint->string('firstname')->nullable()->after('email_verified_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $blueprint){
            $blueprint->dropColumn([
                'firstname',
                'lastname',
                'company',
                'position',
            ]);
        });
    }
};
