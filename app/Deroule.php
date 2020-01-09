<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Deroule extends Model
{
    protected $fillable = [
        'derouleTitle',
        'derouleContent'
       ];
}
