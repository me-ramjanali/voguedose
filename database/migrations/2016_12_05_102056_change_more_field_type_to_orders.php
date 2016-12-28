<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeMoreFieldTypeToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function($table) {
            $table->text('dressCoast')->change();
            $table->text('topsCoast')->change();
            $table->text('bottomCoast')->change();
            $table->text('bagsCoast')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function($table) {
            $table->dropColumn('dressCoast', 'topsCoast', 'bottomCoast', 'bagsCoast');
        });
    }
}
