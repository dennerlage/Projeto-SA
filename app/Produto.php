<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $table = 'produto';
    protected $primaryKey = 'ProCod';
    
}
