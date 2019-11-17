<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
class UserController extends Controller
{
    //
    public function getUser(){
        $data['userList'] = User::all();
    	return view('backend.admin',$data);
    }

    public function getAddUser(){
    	$data['userList'] = User::all();
        return view('backend.add',$data);
    }

    public function postAddUser(AddUserRequest $request){
        $user = new User;
        $user->email = $request->mail;
        $user->password = bcrypt($request->pass);
        $user->level = $request->level;
        $user->save();
        return back();
    }

    public function getEditUser($id){
    	$data['user'] = User::find($id);
        return view('backend.edit',$data);
    }

    public function postEditUser(Request $request, $id){
        $user = new User;
        $arr['email'] = $request->mail;
        $arr['password'] = bcrypt($request->pass);
        $arr['level'] = $request->level;
        $user::where('id',$id)->update($arr);
        return back();
    }

    public function getDeleteUser($id){
        User::destroy($id);
        return back();
    }

}
