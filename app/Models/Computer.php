<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'number',
        'brand',
        'marca',
        'imagen_url',
    ];






    // Un computador tiene muchos aprendices
    public function aprendice(){
        return $this->hasOne(Aprendice::class);
    }
}
