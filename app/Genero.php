<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $guarded = ['idgenero'];
    protected $primaryKey = 'idgenero';
    public $timestamps = false;
    protected $table = 'genero';

}
