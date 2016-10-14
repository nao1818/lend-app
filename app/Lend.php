<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lend;

class Lend extends Admin
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    *
    */

    protected $fillable = ['title'];

}
