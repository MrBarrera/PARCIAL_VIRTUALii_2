<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $guarded = ['idcategoria'];
    protected $primaryKey = 'idcategoria';
    protected $table = 'categoria';
    public $timestamps = false;
}
