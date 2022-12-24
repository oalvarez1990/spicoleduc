<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //create teacher
    public function teacherCreate(Request $request)
    {
        try {
            $request->validate([
                'typeDocument' => 'required|string',
                'document' => 'required|integer',
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'firstSurname' => 'required|string',
                'secondSurname' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',

            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }

        Teacher::create([
            'typeDocument' => $request->typeDocument,
            'document' => $request->document,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'firstSurname' => $request->firstSurname,
            'secondSurname' => $request->secondSurname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
        ]);

        return 'Teacher' . $request->document . 'Teacher successfully created!!';       
    }
    //teacher update
    public function teacherUpdate(Request $request, $id)
    {
        try {
            $request->validate([
                'typeDocument' => 'required|string',
                'document' => 'required|integer',
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'firstSurname' => 'required|string',
                'secondSurname' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }

        $teacher = Teacher::find($id);
        $teacher->typeDocument = $request->typeDocument;
        $teacher->document = $request->document;
        $teacher->firstName = $request->firstName;
        $teacher->lastName = $request->lastName;
        $teacher->firstSurname = $request->firstSurname;
        $teacher->secondSurname = $request->secondSurname;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->city = $request->city;
        $teacher->save();
        return 'Teacher' . $request->document . 'Teacher successfully updated!!';
    }
    //teacher delete
    public function teacherDelete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return 'Teacher' . $id . 'Teacher successfully deleted!!';
    }
    //teacher list
    public function teacherList()
    {
        $teacher = Teacher::all();
        return $teacher;
    }
}
