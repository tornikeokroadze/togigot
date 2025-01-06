<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    protected $table = 'welcome';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en', 'title_ru', 'text_ka','text_en', 'text_ru', 'image', 'date'];
}
