<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'description',
        'price',
        'id_type',
    ];
    protected $table = "tours";
    public function type_tours() {
         return $this->belongsTo('App\Product\TypeTours', 'id', 'id_type');
    }
    public function bill_details() {
        return $this->hasMany('App\Product\Bills', 'id_tour', 'id');
    }
}
