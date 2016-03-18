<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function index(Request $request)
    {
        Message::create([
            'name'  =>  $request->input('name'),
            'email' =>  $request->input('email'),
            'message'=> $request->input('message'),
            'ip'    =>  $request->ip()
        ]);
        
        return "success";
    }
}
