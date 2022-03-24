<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaintingInfo extends Model
{
    use HasFactory;
    public $table = 'paintingInfo';

    protected $fillable = [
        'artist_name', 'painting_name', 'category', 'price','size','orientation','description','painting_path'
    ];
}
