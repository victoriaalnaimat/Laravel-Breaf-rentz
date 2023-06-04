<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
class LessonHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lesson.addhouse');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        // Validate the form data
        $validatedData = $request->validate([
            'house_type' => '',
            'pepole_num' => '',
            'pepole_bed' => '',
            'pepole_bathroom' => '',
            'description' => '',
            'service' => '',
            'extra' => '',
            'house_name' => '',
            'about' => '',
            'location' => '',
            'price' => '',
            'image1' => '' ,
            'image2' => '' ,
            'image3' => '' ,
            'image4' => '' ,
            'image5' => '' // Assuming you only allow image files with a maximum size of 2MB
        ]);
        
        // Store the uploaded image
        $imagePath1 = $request->file('image1')->store('houseimage', 'public');
        $imagePath2 = $request->file('image2')->store('houseimage', 'public');
        $imagePath3 = $request->file('image3')->store('houseimage', 'public');
        $imagePath4 = $request->file('image4')->store('houseimage', 'public');
        $imagePath5 = $request->file('image5')->store('houseimage', 'public');

        // Create a new house record in the database
        $house = new House();
        $lessonId = session('lesson_id');
        $house->type_id = $validatedData['house_type'] ;
        $house->number_person = $validatedData['pepole_num'];
        $house->number_bed = $validatedData['pepole_bed'];
        $house->number_bathroom = $validatedData['pepole_bathroom'];
        $house->description = $validatedData['description'];
        $house->service = $validatedData['service'];
        $house->extra_service = $validatedData['extra'];
        $house->house_name = $validatedData['house_name'];
        $house->about = $validatedData['about'];
        $house->location = $validatedData['location'];
        $house->price = $validatedData['price'];
        $house->lesson_id =$lessonId;
        $house->image1 = $imagePath1;
        $house->image2 = $imagePath2;
        $house->image3 = $imagePath3;
        $house->image4 = $imagePath4;
        $house->image5 = $imagePath5;
        $house->save();
        return redirect()->route('lessons.index')->with('success', 'Lesson created successfully.');


        // Redirect or perform additional actions as needed
    }

    public function show($id)
    {
        
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
