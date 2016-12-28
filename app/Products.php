<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $fillable = [
        'code', 'type', 'color', 'fit', 'size', 'status', 'price', 'picture', 'user_type', 'created_by'
    ];

    public function getAllTypes(){        
        $types = Products::select('type')
                        ->groupBy('type')
                        ->orderBy('type', 'asc')
                        ->get();
        return $types;
    }

    public function getAllColors(){        
        $colors = Products::select('color')
                        ->groupBy('color')
                        ->orderBy('color', 'asc')
                        ->get();
        return $colors;
    }

    public function getAllFits(){        
        $fits = Products::select('fit')
                        ->groupBy('fit')
                        ->orderBy('fit', 'asc')
                        ->get();
        return $fits;
    }

    public function getAllSizes(){        
        $sizes = Products::select('size')
                        ->groupBy('size')
                        ->orderBy('size', 'asc')
                        ->get();
        return $sizes;
    }
}
