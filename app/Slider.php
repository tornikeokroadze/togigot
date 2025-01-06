<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en','button1_text_ka','button1_text_en' ,'image','url','sort'];
}