<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function index()
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

        return view('home.app')->with('address', $address);
    }
}
