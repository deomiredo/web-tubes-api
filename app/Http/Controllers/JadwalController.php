<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $film = Jadwal::all();
        return response()->json($film, 200);
    }

    public function show($id)
    {
        $jadwal = Jadwal::find($id);
        if(is_null($jadwal))
        {
            return response()->json("not found", 404);
        }else{
            return response()->json($jadwal, 200);
        }
    }

    public function store(Request $request)
    {
        $jadwal = new Jadwal;
        $jadwal->title = $request->title;
        $jadwal->rating = $request->rating;
        $jadwal->duration = $request->duration;
        $jadwal->waktu = $request->waktu;
        $jadwal->description = $request->description;
        $success = $jadwal->save();
        if(!$success)
        {
            return response()->json("Error menyimpan", 500);
        }else{
            return response()->json("Success", 201);
        }
    }

    public function update(Request $request)
    {
        $jadwal = Jadwal::find($request->id);
        $jadwal->title = $request->title;
        $jadwal->rating = $request->rating;
        $jadwal->duration = $request->duration;
        $jadwal->waktu = $request->waktu;
        $jadwal->description = $request->description;
        $success = $jadwal->save();
        if(!$success)
        {
            return response()->json("Error update", 500);
        }else{
            return response()->json("Success", 201);
        }
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        if(is_null($jadwal))
        {
            return response()->json("Data Not Found", 400);
//            throw new Exception('Data Not Found', 404);
        }
        $success = $jadwal->delete();

        if(!$success)
        {
            return response()->json("Error Delete", 500);
        }else{
            return response()->json("Delete Success", 201);
        }
    }
}
