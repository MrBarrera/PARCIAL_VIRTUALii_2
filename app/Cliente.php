<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = ['idcliente'];
    protected $primaryKey = 'idcliente';
    protected $table = 'cliente';

    public $timestamps = false;
}
