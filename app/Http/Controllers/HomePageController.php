<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $address = Address::select('id')->get()->toArray();
        $address = Address::select('id')->get();
        $items_name = $address->pluck('id');
        dd($items_name);
        // dd($address->id);
        // $address = Address::all();
        foreach ($address as $a) {
            echo $a->id;
        }
        dd($address);
        return view('home.app')->with('address', $address);
        // return view('home.app');
    }
}
