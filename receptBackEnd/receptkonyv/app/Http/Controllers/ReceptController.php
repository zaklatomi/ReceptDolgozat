<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index()
    {
        return Recept::with('kategoria')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nev' => 'required|string',
            'kat_id' => 'required|exists:kategorias,id',
            'leiras' => 'required|string',
            'kep_eleresi_ut' => 'nullable|string',
        ]);

        return Recept::create($request->all());
    }


    public function destroy($id)
    {
        Recept::findOrFail($id)->delete();
        return response()->json(['message' => 'Recept törölve']);
    }
    

}
