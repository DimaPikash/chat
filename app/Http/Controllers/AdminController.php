<?php

namespace App\Http\Controllers;

//use App\Http\Requests\Request;
use Request;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function index(User $user)
    {
        if (Auth::user()->role =='admin')
        {
            $data['users'] = User::All();
            return view('admin.index', $data);
        }
        else
        {
            $data['message'] = 'Вам сюда нельзя!';
            return view('errors.forbidden', $data);
        }
    }

    public function UserManage($id)
    {
        $status = Request::input('status');
        $user = User::find($id);
        $user->active = $status;
        $user->save();
        return redirect()->back();
    }
}
