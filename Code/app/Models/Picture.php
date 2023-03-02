<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    protected $fillable = [
        'license',
        'category_id',
        'dimensions',
        'aspect_ratio',
        'file_size',
        'views',
        'price',
        'owner_id',
    ];
}