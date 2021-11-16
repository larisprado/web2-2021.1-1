<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    use HasFactory;
    protected $table = "itensvendas";
    protected $fillable = ['idvenda','quantidade'];

    public function Venda(){
        return $this->belongsTo(Venda::class, 'idvenda','id');
    }
}