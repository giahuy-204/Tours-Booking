<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTours extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];
    protected $table = "type_tours";
    public function types() {
        return $this->hasMany('App\Product\Tours', 'id_type', 'id');
    }
}
