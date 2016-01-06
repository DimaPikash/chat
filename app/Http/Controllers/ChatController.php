<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gate;
use App\User;
use Auth;
use Request;
use Illuminate\Support\Facades\Session;
class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if (Auth::user()->active ==1)
        {
            $data['user'] = Auth::user()->name;
            return view('chat', $data);
        }
        else
        {
            $data['message'] = 'Ваш аккаунт заблокирован';
            return view('errors.forbidden', $data);
        }
    }
}
