<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveSection1Subtext2ColumnToThirdPosition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_pages', function (Blueprint $table) {
            
            $table->string('section1_subtext2')->after('section1_subtext');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_pages', function (Blueprint $table) {
            $table->dropColumn('section1_subtext2');
        });
    }
}
