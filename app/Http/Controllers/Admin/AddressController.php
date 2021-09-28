<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return view('admin.address');
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => ['required'],
            'address' => ['required'],
            'cardinality' => ['required'],
            'size' => ['required'],
            'image' => ['required', 'mimes:jpg,png,jpeg',  'max:5048'],
            'description' => ['required'],
        ]);

        $imgName = $request->file('image')->getClientOriginalName();

        $newImageName = time() . '-' . $request->city . $request->address . $imgName;

        $request->image->move(public_path('img'), $newImageName);

        $addressId = substr($request->city, 0, 3) . substr($request->address, 0, 2) . rand(0, 1000000);

        Address::create([
            'id' => $addressId,
            'city' => $request->city,
            'address' => $request->address,
            'cardinality' => $request->cardinality,
            'size' => $request->size,
            'image_path' => $newImageName,
            'description' => $request->description
        ]);

        return redirect()->route('admin');
    }
}
