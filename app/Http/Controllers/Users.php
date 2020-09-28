<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;


class Users extends Controller
{
    public function getAllMembers(){

        $member = User::all();
        return view("admin/Users/Users",["members"=>$member]);

     }

     //for library
    public function showMember($member_id){

        $member_data = User::findOrFail($member_id);

        return view("admin/Users/userview", ["member"=>$member_data]);
    }
    public function edit($member_id){
        $members = Admin::findOrFail($member_id);
        return view('admin/Users/edit_user',["member"=>$members]);
     }
     public function UserUpdate($member_id){
        $members = Admin::findOrFail($member_id);
        $members->name=request('name');
        $members->email=request('email');
        $members->password=bcrypt(request('password'));
        $members->save();
        return redirect('/Users');
     }
     public function search_member(Request $request){
        $search = $request->get('search');
        $member = User::where([
            ['name', 'LIKE', '%' . $search . '%']
        ])->paginate(5);

        return view('admin/Users/search_result', compact('member'));
     }
    public function deleteMember($member_id) {

        $member = User::findOrFail($member_id);
        $member->delete($member->id);

        return redirect("/Users");
    }
    public function login_get(){

        return view('login');
    }
    public function login_post(){
        $remember=request()->has('remember')?true:false;
        if(auth()->attempt(['email'=>request('email'),'password'=>request('password')],$remember)){
            return redirect('homepage');
        }else{
            return back();
        }
    }

    public function edit_profile($user_id){
        $members = User::findOrFail($user_id);
        return view('guest/edit_profile',["member"=>$members]);
     }
     public function update_profile($user_id){
        $members = User::findOrFail($user_id);
        $members->name=request('name');
        $members->email=request('email');
        $members->password=bcrypt(request('password'));
        $members->save();
        return redirect('/homepage');
     }
}
