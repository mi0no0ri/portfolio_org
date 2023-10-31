<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\postdetails;
use App\Language;
use App\UsableLanguages;
use App\Frameworks;
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
        // 画像保存
        if($request->has('image')){
            foreach($request['image'] as $postdetail){
                foreach($postdetail as $key => $val){
                    $file_name = $val->getClientOriginalName();
                    $path = $val->storeAs('public/work', $file_name);
                    $data = [
                        'post_id' => $post->id,
                        'image' => $file_name,
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                    $postdetail = postdetails::insert($data);
                }
            }
        }
        // 使用言語保存
        if ($request->has('language')){
            foreach($request['language'] as $language){
                foreach($language as $key => $val){
                    $data = [
                        'post_id' => $post->id,
                        'language_id' => $val,
                        'created_at'=> now(),
                        'updated_at' => now()
                    ];
                    $language = Language::insert($data);
                }
            }
        }
        // 使用フレームワーク保存
        if ($request->has('framework')){
            foreach($request['framework'] as $framework){
                foreach($framework as $key => $val){
                    $data = [
                        'post_id' => $post->id,
                        'framework_id' => $val,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    $framework = Frameworks::insert($data);
                }
            }
        }
        return redirect()->route('home');
    }
    // 投稿一覧表示
    public function postlist() {
        $posts = Post::with('postdetails')
            ->orderBy('created_at', 'desc')
            ->get();
        // dd($posts);
        return view('auth/post/postList', compact('posts'));
    }
    // 投稿編集画面表示
    public function postEdit($id) {
        $post = Post::with(['postdetails', 'language'])
            ->where('id', $id)
            ->first();
        $langs = UsableLanguages::orderBy('id', 'asc')
            ->get();
        return view('auth/post/postEdit', compact('post', 'langs'));
    }
    // 投稿更新
    public function postUpdate(Request $request, $id) {
        $post = Post::find($id);
        $post->fill($request->except('postdetail', 'language', 'framework'))
            ->save();
        dd($request);
        // 画像更新
        if($request->has('postdetail')) {
            foreach($request['postdetail'] as $postdetail) {
                foreach($postdetail as $key => $val){
                    $file_name = $val->getClientOriginalName();
                    $path = $val->storeAs('public/work', $file_name);
                    if($path){
                        $data->post_id = $id;
                        $data->image = $file_name;
                        $data->updated_at = now();
                        $data->save();
                    }
                }
            }
        }
        // 使用言語更新
        if ($request->has('language')) {
            Language::where('post_id', $id)->delete();
            foreach($request['language'] as $language) {
                foreach($language as $key => $val) {
                $data = [
                    'post_id' => $post->id,
                    'language_id' => $val,
                    'created_at'=> now(),
                    'updated_at' => now()
                ];
                $language = Language::insert($data);
                }
            }
        }
        // 使用フレームワーク更新
        if ($request->has('framework')) {
            Frameworks::where('post_id', $id)->delete();
            foreach($request['framework'] as $framework){
                foreach($framework as $key => $val){
                    $data = [
                        'post_id' => $post->id,
                        'framework_id' => $val,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    $framework = Frameworks::insert($data);
                }
            }
        }
        return back();
    }
    // 投稿削除
    public function postDelete($id) {
        postdetails::where('post_id', $id)->delete();
        Language::where('post_id', $id)->delete();
        Frameworks::where('post_id', $id)->delete();
        Post::where('id', $id)->delete();
        return view('auth/post/postList');
    }
}
