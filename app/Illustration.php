<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
    protected $fillable=['photo'];

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
