<?php

namespace App\Http\Controllers;

use App\Models\Asignature;
use Illuminate\Http\Request;

class AsignatureController extends Controller
{
    //create asignature
    public function asignatureCreate(Request $request)
    {
        try {
            $request->validate([
                'nameAsignature' => 'required|string',
                'codeAsignature' => 'required|integer',
                'description' => 'required|string',
                'credits' => 'required|integer',
                'knowledgeArea' => 'required|string',
                'elective' => 'required|string',
            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }

        Asignature::create([
            'nameAsignature' => $request->nameAsignature,
            'codeAsignature' => $request->codeAsignature,
            'description' => $request->description,
            'credits' => $request->credits,
            'knowledgeArea' => $request->knowledgeArea,
            'elective' => $request->elective,
        ]);    
        return 'Asignature' . $request->codeAsignature . 'Asignature successfully created!!';       
    }
    //asignature update
    public function asignatureUpdate(Request $request, $id)
    {
        try {
            $request->validate([
                'nameAsignature' => 'required|string',
                'codeAsignature' => 'required|integer',
                'description' => 'required|string',
                'credits' => 'required|integer',
                'knowledgeArea' => 'required|string',
                'elective' => 'required|string',
            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }

        $asignature = Asignature::find($id);
        $asignature->nameAsignature = $request->nameAsignature;
        $asignature->codeAsignature = $request->codeAsignature;
        $asignature->description = $request->description;
        $asignature->credits = $request->credits;
        $asignature->knowledgeArea = $request->knowledgeArea;
        $asignature->elective = $request->elective;
        $asignature->save();
        return 'Asignature' . $request->codeAsignature . 'Asignature successfully updated!!';
    }
    //asignature delete
    public function asignatureDelete($id)
    {
        $asignature = Asignature::find($id);
        $asignature->delete();

        return 'Asignature' . 'Asignature successfully deleted!!';
    }
    //list asignature
    public function asignaturelist()
    {
        $asignature = Asignature::all();
        return $asignature;
    }

}
