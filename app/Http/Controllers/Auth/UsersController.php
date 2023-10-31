<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UsableLanguages;
use App\UsableTools;
use App\Tools;
use App\UsableFrameworks;
use App\Lang_Frame;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\LanguageRequest;
use App\Http\Requests\ToolRequest;

class UsersController extends Controller
{
    // プロフィール更新一覧表示
    public function about() {
        return view('auth/about');
    }

    // プロフィール更新画面表示
    public function profile() {
        $user = User::where('id', 1)
            ->select('id', 'name', 'email', 'introduce', 'image', 'background')
            ->first();
        return view('auth/about/profile', compact('user'));
    }

    // プロフィール更新
    public function updateProfile(UserRequest $request){
        $user = User::find($request->id);
        $user->fill($request->except('image', 'background'))
            ->save();
        if($request->file('image') != null){
            $img = $request->file('image');
            $path = $img->store('about', 'public');
            $user->image = $path;
            $user->save();
        } else if ($request->file('background') != null) {
            $img = $request->file('background');
            $path = $img->store('about', 'public');
            $user->background = $path;
            $user->save();
        }
        return redirect()->route('admin.about');
    }

    // パスワード更新画面表示
    public function password() {
        return view('auth/about/changePassword');
    }

    // パスワード更新
    public function updatePassword(PasswordRequest $request) {
        $user = Auth::user();
        if(Hash::check($request->currentPassword, $user->password)){
            $user->password = Hash::make($request['password']);
            $user->save();
        } else {
            return 'パスワードが一致しません';
        }
        return redirect()->route('admin.about');
    }

    // 使用言語更新画面表示
    public function language() {
        $langs = UsableLanguages::with('lang_frames.usableFramework')
            ->orderBy('id', 'asc')
            ->get();
        return view('auth/about/language', compact('langs'));
    }

    // 使用言語追加
    public function addLanguage(LanguageRequest $request) {
        UsableLanguages::create([
            'language' => $request->language,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->back();
    }

    // 使用言語、フレームワーク削除
    public function deleteLanguage(Request $request, $id){
        if($request->has('language')) {
            UsableLanguages::where('id', $id)
            ->delete();
        } else if ($request->has('framework')) {
            $frame_id = Lang_Frame::where('id', $id)
                ->first();
            Lang_Frame::where('id', $id)
                ->delete();
            UsableFrameworks::where('id', $frame_id->framework_id)
                ->delete();
        }
        return back();
    }

    // 使用フレームワーク追加
    public function addFramework(Request $request, $id) {
        $lang_id = $request->language_id;
        $frame = UsableFrameworks::create([
            'framework' => $request->framework
        ]);
        $frame->usableLanguages()
            ->attach($lang_id, ['framework_id' => $frame->id]);
        return back();
    }

    // 使用ツール更新
    public function tool() {
        $usableTools = UsableTools::orderBy('id', 'asc')
            ->get();
        return view('auth/about/tool', compact('usableTools'));
    }

    // 使用ツール登録
    public function addTools(ToolRequest $request) {
        Tools::create([
            'tool_id' => $request->tool_id,
            'skill' => $request->skill,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
    }

    // 使用ツール削除
    public function deleteTool($id) {
        Tools::where('id', $id)
            ->delete();
        return redirect()->back();
    }
}
