<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(Request $request){
        $items = Client::all();
        return view('client.index', ['items'=>$items]);
    }//clientの全情報をclientのindex.blade.php(企業一覧画面)に渡す
    
    public function add(Request $request){
        return view('client.add');//これで作成画面（clientのadd.blade.php）へ移行させる
    }
    public function create(Request $request){
        $this->validate($request, Client::$rules);
        $form = $request->all();
        Client::create($form);
        return redirect('/client');
    }
}
