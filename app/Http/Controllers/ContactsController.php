<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactSendmail;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function contact() {
        return view('contact');
    }
    public function confirm(ContactRequest $request) {
        $inputs = $request->all();
        return view('contactConfirm', compact('inputs'));
    }
    public function create(ContactRequest $request){
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'contact' => $request->contact,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('contact');
    }
    public function send(ContactRequest $request) {
        if($request->input('back') == 'back'){
            return redirect('contact')
                ->withInput();
        }

        $action = $request->input('action');
        $inputs = $request->except('action');
        $myEmail = 'minori.nishizawa.0314@gmail.com';
        \Mail::to($myEmail)->send(new ContactSendmail($inputs));
        $request->session()->regenerateToken();
        $request->session()->flash('message', 'お問合せありがとうございます。送信完了しました。');

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'contact' => $request->contact,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('contact');
    }
}
