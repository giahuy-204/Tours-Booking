<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table = "bills";
    public function bill() {
        return $this->belongsTo('App\Product\Tours', 'id', 'id_tour');
   }
}
