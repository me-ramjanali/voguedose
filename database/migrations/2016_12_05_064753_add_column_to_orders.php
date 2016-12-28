<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function($table) {
            $table->integer('requested_by');
            $table->integer('assign_to');
            $table->integer('assign_by');
            $table->dateTime('assign_on');
            $table->dateTime('accept_on');
            $table->dateTime('reject_on');
            $table->dateTime('complete_on');
            $table->dateTime('deliver_on');
            $table->text('styler_feedback');
            $table->dateTime('styler_feedback_on');
            $table->text('admin_feedback');
            $table->dateTime('admin_feedback_on');
            $table->tinyInteger('process_status');
            $table->decimal('dressCoast', 9, 2)->change();
            $table->decimal('topsCoast', 9, 2)->change();
            $table->decimal('bottomCoast', 9, 2)->change();
            $table->decimal('bagsCoast', 9, 2)->change();
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
            $table->dropColumn('requested_by', 'assign_to', 'assign_by', 'assign_on', 'accept_on', 'reject_on', 'complete_on', 'deliver_on', 'styler_feedback', 'styler_feedback_on', 'admin_feedback', 'admin_feedback_on', 'process_status', 'dressCoast', 'topsCoast', 'bottomCoast', 'bagsCoast');
        });
    }
}
