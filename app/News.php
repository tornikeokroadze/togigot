<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en','text_en','date','image'];
}
