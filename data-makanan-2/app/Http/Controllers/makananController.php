<?php

namespace App\Http\Controllers;

use App\Models\makananModel;
use Illuminate\Http\Request;

class makananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = $request->kategori;
        $search = $request->search;

        $query = makananModel::query();

        if ($kategori) {
            $query = makananModel::where('kategori', $kategori);
        }

        if ($search) {
            $query = makananModel::where('nama', 'like', '%' . $search . '%');
        }

        $data = $query->orderBy('id', 'asc')->get();

        return view('makanan', compact('data', 'kategori', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
        ];

        makananModel::create($data);
        $data = makananModel::orderBy('id', 'asc')->get();
        return redirect()->to('makanan');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
