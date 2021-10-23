<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//new
class Fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedor";

    protected $fillable = ['nome', 'endereco', 'debito'];
}
