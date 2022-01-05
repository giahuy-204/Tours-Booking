<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table = "bills";
    public function tours() {
        return $this->belongsTo('App\Product\Tours', 'id_tour', 'id');
   }
}
