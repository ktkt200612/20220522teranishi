<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{    
    public function add(){
        return view('add');//これで作成画面（clientのadd.blade.php）へ移行させる
    }
    public function create(Request $request){
        $this->validate($request, Client::$rules);
        $form = $request->all();
        Client::create($form);
        return redirect('/index');
    }
    public function index()
    {
        $user = Auth::user();
        $items = Client::where('user_id',$user->id)->get(); //Clientモデルのuser_idカラムを使ってwhereで検索
        return view('index', ['items' => $items]);
    }
}
