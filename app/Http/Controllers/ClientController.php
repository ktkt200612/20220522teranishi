<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(Request $request){
        $items = Client::all();
        return view('client.index', ['items'=>$items]);
    }
}
