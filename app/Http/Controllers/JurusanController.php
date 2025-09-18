<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Http\jsonResponse;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index api jurusan 
        $jurusan = Jurusan::all(); //select * from jurusan 
        if ($jurusan->isEmpty()) {
            return response()->json([
                'message' => 'Data jurusan tidak ditemukan'
            ], 404);
        }
        return response()->json($jurusan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data jurusan
        $request->validate([
            'namajurusan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:255'
        ]);

        Jurusan::create([
            'namajurusan' => $request->namajurusan,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()-> json([ 
            'message' => 'Data jurusan berhasil',
            'data' => $jurusan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi
        $data = $request->validate([
            'namajurusan' => ['nullable', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string']
        ]);

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->namajurusan = $data['namajurusan'];
        $jurusan->deskripsi = $data['deskripsi'];

        if ($jurusan->save()){
            return response()->json([
                'message' => 'data tidak no found',
                'data' => $jurusan
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        //
    }
}
