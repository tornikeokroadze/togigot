<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    public $primaryKey = 'id';
    public $timestemps = true;
    protected $fillable = ['title_ka','title_en','title_ru','sort', 'id'];

    public function items(){
        return $this->hasMany('App\QuestionItem', 'question_id','id');
    }
}
