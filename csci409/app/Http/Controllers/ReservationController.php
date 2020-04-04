<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::orderBy('arrival', 'asc')->get();
        return view('reservations')->with('reservations', $reservations);
    }

    public function create(){}

    public function store(Request $request){}

    public function show(Reservation $reservation){}

    public function edit(Reservation $reservation){}

    public function update(Request $request, Reservation $reservation){}

    public function destroy(Reservation $reservation){}
}
