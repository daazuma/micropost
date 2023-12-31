<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::orderBy("id","desc")->paginate(10);

        return view("user.index",[
            "users"=>$users,
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        $user ->loadRelationshipcounts();

        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

        return view("user.show",[
            "user"=>$user,
            "microposts"=>$microposts,
        ]);
    }

    public function followings($id)
    {
        $user=User::findOrFail($id);

        $user->loadRelationshipCounts();

        $followings = $user->followings()->paginate(10);

        return view('user.followings', [
            "user" =>$user,
            "users" =>$followings,
        ]);
    }

    public function followers($id)
    {
        $user = User::findOrFail($id);

        $user ->loadRelationshipCounts();

        $followers = $user->followers()->paginate(10);

        return view("user.followers",[
           "user"=>$user,
           "users"=>$followers
        ]);
    }

    public function favorites($id)
    {
        $user = User::findOrFail($id);

        $user ->loadRelationshipcounts();

        $microposts = $user->favorites()->orderBy('created_at', 'desc')->paginate(10);

        return view("user.favorites",[
            "user"=>$user,
            "microposts"=>$microposts,
        ]);
    }
};
