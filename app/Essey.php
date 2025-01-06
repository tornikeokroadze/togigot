<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essey extends Model
{
    protected $table = 'essey';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en', 'title_ru', 'text_ka','text_en', 'text_ru', 'date','image','status'];
}
