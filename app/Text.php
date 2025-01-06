<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $table = 'text';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['status','title_ka','title_en','text_ka','text_en','page','image'];
}
