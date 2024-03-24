<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('developer_table', function (Blueprint $table) {
            $table->primary('Developer_Id');
        });
    }

    public function down()
    {
        Schema::table('developer_table', function (Blueprint $table) {
            $table->dropPrimary('Developer_Id');
        });
    }
};