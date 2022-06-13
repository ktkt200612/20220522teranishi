<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;

class StatusController extends Controller
{
    public function add(){
        $items = Status//モデル名※statusテーブル全データ取得
        ::all();
        return view ('status', ['items'=> $items]);//status.blade.phpにitemsの情報をもたせたまま画面表示させる
    }
    public function create(Request $request)
    {   
        $form = $request->all();//「$requestの内容を$formに格納する」
        Status::create($form);
        return redirect('/status');
    }
    public function update(Request $request) 
    {
        Status::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        Status::where('id',$request->id)->update($form);
        return redirect('/status');
    } 
    public function relate()
    {
        $user = Auth::user();
        $items = Client::where('user_id',$user->id)->get();
        return view('relate', ['items' => $items]);
    }
}
//$items = Status::all();
