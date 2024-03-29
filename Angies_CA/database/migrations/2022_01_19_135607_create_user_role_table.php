<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            // these  must be the same int as the ids taht are defined in the users and roles table
            // they are unsigned bigints

                    // PRIMARY KEYS 

                    $table->bigInteger('user_id')->unsigned();
                    $table->bigInteger('role_id')->unsigned();
            $table->timestamps();
               // FOREIGN KEYS

            // now im adding foreign keys that are from the users and roles table
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict'); // this says that user id is a foreign key 
            //and connects to the users table as there it is the primary key
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_role');
    }
}
