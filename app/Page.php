<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';
    public $primaryKey = 'id';
    public $timestemps = true;

}
