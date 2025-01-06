<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en', 'title_ru',  'sort'];
}
