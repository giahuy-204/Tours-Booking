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
}
