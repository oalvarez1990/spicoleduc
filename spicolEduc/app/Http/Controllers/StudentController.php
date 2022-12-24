<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    //create student 
    public function studentCreate(Request $request)
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
                'phone' => 'required|integer',
                'address' => 'required|string',
                'city' => 'required|string',
                'semester' => 'required|string',
                'sex' => 'required|string',

            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }

        Student::create([
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
            'semester' => $request->semester,
            'sex' => $request->sex,
        ]);
        return 'Student ' . $request->document . ' Student successfully created!!';
    }
    //student update
    public function studentUpdate(Request $request, $id)
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
                'phone' => 'required|integer',
                'address' => 'required|string',
                'city' => 'required|string',
                'semester' => 'required|string',
                'sex' => 'required|string',
            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
        Student::find($id)->update([
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
            'semester' => $request->semester,
            'sex' => $request->sex,
            
        ]);
        return 'Student' . $request->document . 'Student successfully updated!!';
    }
    //student delete
    public function studentDelete($id)
    {
        Student::find($id)->delete();
        return 'Student successfully deleted!!';
    }
    //list student
    public function list()
    {
        return Student::all();
    }
    //list student by id
    public function listById($id)
    {
        return Student::find($id);
    }
    //student Information
    public function studentInformation($id)
    {
        return Student::find($id)->information;
    }
}
