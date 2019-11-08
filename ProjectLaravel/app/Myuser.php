<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myuser extends Model
{
    //
    protected $table = 'myusers';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
