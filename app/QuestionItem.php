<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionItem extends Model
{
    protected $table = 'question_item';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en','title_ru','question_id','status','id'];
}
