<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function contactlist() {
        $contacts = DB::table('contacts')->get();
        return view('auth.contact', compact('contacts'));
    }
}
