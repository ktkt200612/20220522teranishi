<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array('name' => 'required','status_id' => 'required',);
    public function getName(){
        return $this->name;
    }//Clientsテーブルの情報を返すgetTitleメソッド
}
