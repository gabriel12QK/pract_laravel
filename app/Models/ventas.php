<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    protected $table= 'ventas';
   public $timestamps =false;
    public $fillable = ['nom_pro', 'pre_pro', 'cant_pro' ];
}
