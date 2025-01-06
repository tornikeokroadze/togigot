<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public $primaryKey = 'id';
    public $timestemps = true;
	protected $fillable = ['phone','phone2','email','email2','facebook','instagram','youtube','vk','twitter','address_ka','address_en', 'coords','image'];

}
