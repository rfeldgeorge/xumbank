<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForRoleUsers extends Migration
{
 
    public function up()
    {
        Schema::table('role_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::table('role_users', function(Blueprint $table){
            $table->dropForeign('role_users_user_id_foreign');
            $table->dropForeign('role_users_role_id_foreign');
        });
    }
}
