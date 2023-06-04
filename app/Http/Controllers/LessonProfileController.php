<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Lesson;
class LessonProfileController extends Controller
{
  
    public function index()
    {
        $lessonId = session('lesson_id');
        $houses = House::where('lesson_id', $lessonId)->get();
        $lesson = Lesson::find($lessonId)->first();
        return view('lesson.profile', compact('houses'),compact('lesson'));
    }


    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
