<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\DataKematian;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class DataKematianController extends Controller
{ 
    public function index()
    {
        $datakematian = DataKematian::all();
        return view('pages.backsite.datakematian.index', compact('datakematian'));
    }

    public function create()
    {
        $datakematian = DataKematian::all();
        return view('pages.backsite.datakematian.create', compact('datakematian'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'tgl_mati' => 'required|string|max:255',
            'penyebab' => 'required|string|max:255',
        ]);

        DataKematian::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_mati' => $request->tgl_mati,
            'penyebab' => $request->penyebab, 
        ]);

        return redirect()->route('datakematian.index')->with('success', 'Data Kematian Berhasil Ditambah');
    }

    public function show($id)
    {
        $datakematian = DataKematian::find($id);
        return view('pages.backsite.datakematian.show', compact('datakematian'));
    }

    public function edit($id)
    {
        $datakematian = DataKematian::find($id);
        return view('pages.backsite.datakematian.edit', compact('datakematian'));
    }

    public function update(Request $request, $id)
    {
        $datakematian = DataKematian::find($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'tgl_mati' => 'required|string|max:255',
            'penyebab' => 'required|string|max:255',
        ]);

        $datakematian->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_mati' => $request->tgl_mati,
            'penyebab' => $request->penyebab,
        ]);

        return redirect()->route('datakematian.index')->with('success', 'Data Kematian updated successfully');
    }

    public function destroy($id)
    {
        $datakematian = DataKematian::find($id);
        $datakematian->delete();

        return redirect()->route('datakematian.index')->with('success', 'Data Kematian deleted successfully');
    }
}
