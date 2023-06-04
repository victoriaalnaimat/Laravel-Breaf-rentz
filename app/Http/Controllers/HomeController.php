<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Booking;

class HomeController extends Controller
{

        public function index()
        {
            $houses = House::all();

            return view('home.index', compact('houses'));

        }
        public function showHouses(Request $request)
        {

            $type_id = $request->query('type_id');
            $houses = House::where('type_id', $type_id)->get();
            return view('home.index', compact('houses'));
        }

    public function create()
    {

    }
    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $bookedDates = Booking::pluck('start_date', 'end_date')->toArray();
        $house = House::find($id);
        return view('home.single', compact('house', 'bookedDates'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }








}
