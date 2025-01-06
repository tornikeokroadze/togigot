<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en','text_en','image','sort'];
}
