<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
use App\Certification;
use App\Skills;
use App\Tools;

class UsersController extends Controller
{
    public function top() {
        $user = User::leftJoin('posts','users.id','=','posts.user_id')
            ->where('users.id',1)
            ->first();
        $images = Post::find(1)
            ->with(['language', 'postdetails', 'functions'])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        return view('portfolio',compact('user', 'images'));
    }
    public function about() {
        $user = User::where('id', 1)
            ->first();
        $userInfo = User::find(1)
            ->where('users.id', 1)
            ->with(['hobbies', 'carriers'])
            ->get();
        $certifications = Certification::orderBy('date', 'asc')
            ->limit(5)
            ->get();
        $skills = Skills::with('usableLanguage')
            ->get();
        $tools = Tools::with('usableTool')
            ->get();
        return view('about', compact('user', 'userInfo', 'certifications', 'skills', 'tools'));
    }
}
