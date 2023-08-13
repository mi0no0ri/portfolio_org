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
    public function work() {
        $images = Post::find(1)
            ->with(['language.usableLanguage','postdetails'])
            ->paginate(9);
        return view('work',compact('images'));
    }
    public function workdetail($id) {
        $detail = Post::where('id', $id)
            ->first();
        $images = postdetails::where('post_id', $id)
            ->get();
        return view('workDetail',compact('detail', 'images'));
    }
    public function post() {
        return view('auth.post');
    }
    public function create(PostRequest $request) {
        $post = Post::create([
            'user_id' => Auth::id(),
            'photo' => $request->input('photo'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
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

        $languagus = $request->all();
        foreach($languages['language'] as $language){
            foreach($language as $key => $value){
                $data= [
                    'post_id' => $post->id,
                    'language' => $value,
                    'created_at'=> now(),
                    'updated_at' => now()
                ];
                $language = language::insert($data);
            }
        }

        return redirect()->route('home');
    }
}
