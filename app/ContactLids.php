<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactLids extends Model
{
    protected $table = 'contact_lids';
    public $primaryKey = 'id';
    public $timestemps = true;
}
