<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $guarded = ['iddepartamento'];
    protected $primaryKey = 'iddepartamento';
    protected $table = 'departamento';

    public $timestamps = false;
}
