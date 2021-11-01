<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//new
class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";

    protected $fillable = ['nome', 'endereco', 'debito'];

    protected $guarded = [];

}
