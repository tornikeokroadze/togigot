<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    protected $table = 'metas';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en', 'desc_ka','desc_en','keywords_ka','keywords_en','image'];
}
