<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {


//            $table->string("password",200)->change();
//            $table->string("id",11)->change();
//            $table->string("lastname",200)->change();
//            $table->string("IP",200)->after('lastname')->nullable();

//$table->string("lastname",200)->nullable()->change();

//            $table->renameColumn("IP", 'ip');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {



        });
    }
}
