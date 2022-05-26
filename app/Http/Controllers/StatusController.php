<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index(Request $request){
        $items = Status::all();
        return view('client.index', ['items'=>$items]);
    }
}
