<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels')->with('hotels', $hotels);
    }
    public function create(Request $request)
    {
        return view('hotelform', []);
    }
    public function store(Request $request)
    {
        Hotel::create(['field1' => $request->input('form_field_1'),'field2'=>$request->input('form_field_2')]);
        Route::redirect('/hotels', function () {});
    }
}
