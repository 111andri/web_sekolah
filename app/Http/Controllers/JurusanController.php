<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        // dd($jurusan);
        return view('admin.jurusan', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah.tambah-jurusan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama_jurusan' => 'required'
        ]);

        Jurusan::create([
            'nama_jurusan' => $request->input('nama_jurusan')
        ]);

        return redirect('admin/jurusan')->with('success', 'data jurusan berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id) 
    {
        $jurusan = Jurusan::findOrFail($id);

        return view('admin/edit/edit-jurusan', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //    dd('updated');

        $jurusan = Jurusan::findOrFail($id);

        $jurusan->update($request->all());


        return redirect('admin/jurusan')->with('success', 'Data jurusan berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $jurusan->delete();

        return redirect('admin/jurusan')->with('succes', 'data berhasil di hapus');
        //
    }
}