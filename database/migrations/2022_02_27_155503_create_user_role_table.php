<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
           // these attributes must be the same datatype as the ids that defined in the users and roles table
           // which are unsigned bigInts
           $table->bigInteger('user_id')->unsigned();
           $table->bigInteger('role_id')->unsigned();
           $table->timestamps();

           // foreign keys - ids for the users and roles table as this is an inner join table
           $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restict');
           $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('restict');
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
};
