<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    public $table = 'tblArtist';

    protected $fillable = [
        'name', 'username', 'gender', 'phone','email','password','path'
    ];
}