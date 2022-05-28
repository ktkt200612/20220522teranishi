<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array('name' => 'required',);
    public function getName(){
        return $this->name ;
    }//Statusesテーブルの情報を返すgetTitleメソッド
    public function client(){
        return $this->hasMany('App\Models\Client');
    }
}
