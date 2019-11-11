<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
class UserController extends Controller
{
    //
    public function getUser(){
        $data['userList'] = User::all();
    	return view('backend.admin',$data);
    }
    public function usersList()
    {
        return Datatables::of(User::all())->make(true);
    }
}
