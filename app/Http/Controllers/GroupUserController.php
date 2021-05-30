<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Group;
use App\Models\Role;

class GroupUserController extends Controller
{
    public function store(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        $group = Group::find($request->group_code);
        $role = $user->roles();
        $role2 = Role::find($role->role_id);
        //if($user->attachRole($role2->name) == 'student'){
        $user->groups()->attach($group->id);
        //} 
    }
}
