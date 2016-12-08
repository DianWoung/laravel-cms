<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Card extends Model
{
    protected $table='card';
    public $timestamps=false;

    public function user()
    {
        return $this->belongsTo('App\User','uid','id');
    }

    public function content()
    {
        return $this->hasOne('App\Models\Content','content_id','id');
    }



}