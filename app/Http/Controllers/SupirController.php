<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supirs = Supir::all();
        return view('supir.index', compact('supirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createData = $request->validate([
            'nama' => 'required|min:5|max:255',
            'no_telp' => 'required|unique:supirs|min:11|numeric',
            'no_sim' => 'required|unique:supirs|min:11|numeric',
            'masa_berlaku' => 'required|date_format:Y-m-d',
            'status' => 'required'
        ]);

        Supir::create($createData);

        return redirect('/supir')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function show(Supir $supir)
    {
        return view('supir.show', compact('supir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function edit(Supir $supir)
    {
        return view('supir.edit', compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supir $supir)
    {
        $rules = [
            'nama' => 'required|min:5|max:255',
            'masa_berlaku' => 'required|date_format:Y-m-d',
            'status' => 'required'
        ];

        if ($request->no_telp != $supir->no_telp) {
            $rules['no_telp'] = 'required|unique:supirs|min:11|numeric';
        }

        if ($request->no_sim != $supir->no_sim) {
            $rules['no_sim'] = 'required|unique:supirs|min:11|numeric';
        }

        $updateData = $request->validate($rules);
        $supir->update($updateData);

        return redirect('/supir')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supir $supir)
    {
        $supir->delete();

        return redirect('/supir')->with('success', 'Data berhasil dihapus');
    }
}
