<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{

    use HasFactory;
    
    protected $table = "carro";

    protected $fillable = ['modelo'];

}
