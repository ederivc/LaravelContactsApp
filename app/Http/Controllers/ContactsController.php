<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Contacts $contacts, Request $request)
    {
        $user = $request->user;
        echo gettype($request->user()->contacts);
        dd($request->user()->contacts);

        // dd(::find()->contacts
        //     ->where('user_id', 8));
        // $contacts = Contacts::all();

        return view('contacts.app');
        // return view('contacts.app')->with('contacts', $contacts);
    }
}
