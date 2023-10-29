<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\postdetails;
use App\Language;
use App\UsableLanguages;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    // 投稿新規作成画面表示
    public function post() {
        $languages = UsableLanguages::orderBy('id', 'asc')
            ->get();
        return view('auth.post', compact('languages'));
    }
    // 投稿新規作成
    public function create(PostRequest $request) {
        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $postdetails = $request->all();
        foreach($postdetails['postdetail'] as $postdetail){
            foreach($postdetail as $key => $value){
                $data = [
                    'post_id' => $post->id,
                    'image' => $value,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
                $postdetail = postdetails::insert($data);
            }
        }

        $languages = $request->all();
        foreach($languages['language'] as $language){
            foreach($language as $key => $value){
                $data = [
                    'post_id' => $post->id,
                    'language_id' => $value,
                    'created_at'=> now(),
                    'updated_at' => now()
                ];
                $language = Language::insert($data);
            }
        }
        return redirect()->route('home');
    }
    // 投稿一覧表示
    public function postlist() {
        $posts = Post::with('postdetails')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('auth/post/postList', compact('posts'));
    }
    // 投稿編集画面表示
    public function postEdit($id) {
        $post = Post::with(['postdetails', 'language'])
            ->where('id', $id)
            ->first();
        $langs = UsableLanguages::with('lang_frames.usableFramework')
            ->orderBy('id', 'asc')
            ->get();
        return view('auth/post/postEdit', compact('post', 'langs'));
    }
    // 投稿更新
    public function postUpdate(Request $request) {
        return back();
    }
}
