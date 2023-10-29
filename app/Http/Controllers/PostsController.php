<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\postdetails;
use App\Language;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    // 作品概要表示
    public function work() {
        $images = Post::find(1)
            ->with(['language.usableLanguage','postdetails'])
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return view('work',compact('images'));
    }

    // 作品詳細表示
    public function workdetail($id) {
        $detail = Post::where('id', $id)
            ->first();
        $images = postdetails::where('post_id', $id)
            ->get();
        return view('workDetail',compact('detail', 'images'));
    }
}
