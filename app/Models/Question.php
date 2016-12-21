<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $connection = 'mysql_qasystem';
    protected $table='question';
    public $timestamps=false;
}
