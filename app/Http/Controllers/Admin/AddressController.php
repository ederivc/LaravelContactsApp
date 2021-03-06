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

    public function show()
    {
        $address = Address::all(
            'address_id',
            'city',
            'address',
            'cardinality',
            'size',
            'image_path',
            'description',
        );

        return view('admin.showAddress')->with('address', $address);
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
            'address_id' => $addressId,
            'city' => $request->city,
            'address' => $request->address,
            'cardinality' => $request->cardinality,
            'size' => $request->size,
            'image_path' => $newImageName,
            'description' => $request->description
        ]);

        return redirect()->route('admin');
    }

    public function edit(Address $address)
    {
        return view('admin.editAddress')->with('address', $address);
    }

    public function update(Address $address, Request $request)
    {

        $request->validate([
            'image' => ['mimes:jpg,png,jpeg',  'max:5048'],
        ]);

        $address::where('address_id', $address->address_id)
            ->update([
                'city' => $request->city,
                'address' => $request->address,
                'cardinality' => $request->cardinality,
                'size' => $request->size,
                'description' => $request->description
            ]);


        return back()->with('status', 'Profile updated!');
    }
}
