<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rencontre extends Model
{
    protected $fillable = [
        'rencontreTitle',
        'rencontreContent'
       ];
}
