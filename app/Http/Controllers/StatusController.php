<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
public function add(Request $request){
        return view('status.add');//これで作成画面（statusのadd.blade.php）へ移行させる
    }
    public function create(Request $request){
        $this->validate($request, Status::$rules);
        $form = $request->all();
        Status::create($form);
        return redirect('/status/add');
    }



public function relate(Request $request)
    {
        $items = Status::where('user_id', \Auth::user()->id)->get();
        return view('status.index', ['items'=>$items]);
    }
}
