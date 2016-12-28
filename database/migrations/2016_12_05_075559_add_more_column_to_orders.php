<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreColumnToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function($table) {
            $table->string('order_id');
            $table->dateTime('target_date');
            $table->dateTime('cancel_on');
            $table->text('customer_feedback');
            $table->dateTime('customer_feedback_on');
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
            $table->dropColumn('order_id', 'target_date', 'cancel_on', 'customer_feedback', 'customer_feedback_on');
        });
    }
}
