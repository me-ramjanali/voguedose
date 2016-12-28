<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('customer_age');
            $table->string('customer_height');
            $table->string('customer_weight');
            $table->string('customer_profession');
            $table->string('clothesInWardrobe');
            $table->string('currentStyleRate');
            $table->string('bodyType');
            $table->string('chest');
            $table->string('waist');
            $table->string('hips');
            $table->string('top');
            $table->string('dress');
            $table->string('bottom');
            $table->string('topFit');
            $table->string('bottomFit');
            $table->string('preferCloth');
            $table->string('styleForCloset');
            $table->string('dressCoast');
            $table->string('topsCoast');
            $table->string('bottomCoast');
            $table->string('bagsCoast');
            $table->string('styleRatings');
            $table->string('preferStyle');
            $table->string('socialLinks');
            $table->string('Picture');
            $table->string('likedColor');
            $table->string('dislikedColor');
            $table->string('additionalBodyOption');
            $table->string('additionalBodyComment');
            $table->string('itemsToReject');
            $table->string('itemsToRejectComment');
            $table->string('phone');
            $table->string('address');
            $table->string('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
