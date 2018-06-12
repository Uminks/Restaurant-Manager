<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuIdColumnToPlatosTable extends Migration
{
        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('platos', function (Blueprint $table) {
           
            $table->integer('menu_id')->unsigned();

            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('platos', function (Blueprint $table) {
            $table->dropForeign('platos_menu_id_foreign');

            $table->dropColumn('menu_id');
        });
    }
}
