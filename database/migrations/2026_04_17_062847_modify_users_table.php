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
        Schema::table('users', function (Blueprint $table) {
        $table->renameColumn('name', 'fullname');
        $table->string('role', 100)->default('user')->after('password');
        $table->enum('status', ['Active', 'Inactive'])->default('Active')->after('role');
        $table->string('profile_pic')->nullable()->after('status');
        $table->string('phone', 20)->nullable()->after('profile_pic');
        $table->string('location')->nullable()->after('phone');
        $table->text('bio')->nullable()->after('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
