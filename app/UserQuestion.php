<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    protected $table = 'user_question';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['id','ip','user_id','question_id', 'question_item_id', 'point', 'comment'];

    
}
