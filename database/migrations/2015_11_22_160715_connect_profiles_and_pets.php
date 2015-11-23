<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectProfilesAndPets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('pets', function (Blueprint $table) {
    # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
          $table->integer('profile_id')->unsigned();
    # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
          $table->foreign('profile_id')->references('id')->on('profiles');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('pets', function (Blueprint $table) {
          # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
          $table->dropForeign('pets_profile_id_foreign');
          $table->dropColumn('profile_id');
      });
    }
}
