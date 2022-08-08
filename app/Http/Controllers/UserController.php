<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserController extends Controller
{
    public function index() {
        $users = UserData::all();
        return view('welcome',[
            'users' => $users, 
        ]);
    }
    public function create() {
        return view('add-user');
    }
    public function store(Request $request){
       UserData::create($request->all());
       return redirect('/');
    }
    public function delete($id){
        $user = UserData::find($id);
        $user->delete();
        return back();
    }
    public function edit($id){
        $user = UserData::find($id);
        return view('edit-user',[
            'user' => $user
        ]);
    }
    public function update(Request $request, $id){
        $user = UserData::find($id);
        $user->update($request->all());
        return redirect('/');
    }

}
