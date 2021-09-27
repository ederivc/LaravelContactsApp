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

    public function index(User $user)
    {
        $contacts = Contacts::select('name', 'phone', 'address', 'image_path')
            ->where('user_id', $user->id)->get();

        return view('contacts.app')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contacts.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'image' => ['required', 'mimes:jpg,png,jpeg',  'max:5048'],
        ]);

        $imgName = $request->file('image')->getClientOriginalName();

        $newImageName = time() . '-' . $request->name . $imgName;

        $request->image->move(public_path('img'), $newImageName);

        Contacts::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'image_path' => $newImageName
        ]);

        return redirect()->route('contacts', ['user' => auth()->user()]);
    }
}
