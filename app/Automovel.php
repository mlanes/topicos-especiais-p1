<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovel extends Model
{
    protected $table = 'automovels';
    protected $fillable=['marca', 'modelo', 'placa', 'vl_venda', 'dt_fabricacao'];
    public $timestamps=false;
}
