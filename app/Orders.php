<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'customer_name',
		'customer_age',
		'customer_height',
		'customer_weight',
		'customer_profession',
		'clothesInWardrobe',
		'currentStyleRate',
		'bodyType',
		'chest',
		'waist',
		'hips',
		'top',
		'dress',
		'bottom',
		'topFit',
		'bottomFit',
		'preferCloth',
		'styleForCloset',
		'dressCoast',
		'topsCoast',
		'bottomCoast',
		'bagsCoast',
		'styleRatings',
		'preferStyle',
		'socialLinks',
		'Picture',
		'likedColor',
		'dislikedColor',
		'additionalBodyOption',
		'additionalBodyComment',
		'itemsToReject',
		'itemsToRejectComment',
		'phone',
		'address',
		'comments',
		'target_date',
		'process_status',
		'order_id',
		'requested_by'
    ];
}
