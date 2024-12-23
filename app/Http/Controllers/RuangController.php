<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangs = Ruang::all();
        return view('Ruang.index', [ 
            "title" => "Ruang",
            "ruangs" => $ruangs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ruang.create', ["title" => "Ruang"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate ([
            'nama_ruang' => 'required|min:3|max:255|unique:ruang',
        ]);

        Ruang::create($validatedData);
        return redirect('/ruang')-> with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruang $ruang)
    {
        return view('Ruang.edit', [
            "title" => "Ruang",
            "ruang" => $ruang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ruang $ruang)
    {
        $request->validate([
            'nama_ruang' => 'required|min:3|max:255|unique:ruangs,nama_ruang,'. $ruang-> id,
        ]);

        $ruang->update([
            'nama_ruang' => $request->nama_ruang,
        ]);
        return redirect()->route('Ruang.index')->with('success', 'Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruang $ruang)
    {
        //
    }
}
