<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 class Product extends Model
 {
     protected $fillable = [
     'title',
     'numArticle',
     'description',
    ];


    public function illustrations() {
        return $this->hasMany('App\Illustration');
    }

    public function comments() {
        return $this->hasMany('App\Product');
    }

 }
