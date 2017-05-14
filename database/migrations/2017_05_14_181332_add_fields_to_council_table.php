<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToCouncilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('councils', function (Blueprint $table) {
            $table->string('vice_chairman');
            $table->string('commissary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('councils', function (Blueprint $table) {
            $table->dropColumn('vice_chairman');
            $table->dropColumn('commissary');
        });
    }
}
