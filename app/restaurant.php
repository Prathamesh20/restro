<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    //protected $guarded = ['created_at','updated_at'];
    protected $fillable = ['name','email','address'];

}
