<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFieldTypeToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function($table) {
            $table->integer('customer_age')->change();
            $table->integer('customer_height')->change();
            $table->integer('customer_weight')->change();
            $table->integer('clothesInWardrobe')->change();
            $table->integer('currentStyleRate')->change();
            $table->text('top')->change();
            $table->text('dress')->change();
            $table->text('bottom')->change();
            $table->text('socialLinks')->change();
            $table->text('comments')->change();
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
            $table->dropColumn('customer_age', 'customer_height', 'customer_weight', 'clothesInWardrobe', 'currentStyleRate', 'top', 'dress', 'bottom', 'socialLinks', 'comments');
        });
    }
}
