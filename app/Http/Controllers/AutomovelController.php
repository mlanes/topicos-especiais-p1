<?php

namespace App\Http\Controllers;

use App\Automovel;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;

class AutomovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automoveis = Automovel::all();
        return view('automovel.index')->with('automoveis', $automoveis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('automovel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'marca' => 'required:automovels',
            'modelo' => 'required:automovels',
            'placa' => 'required|unique:automovels',
            'vl_venda' => 'required|numeric:automovels',
            'dt_fabricacao' => 'required|date:automovels',
        ]);
        Automovel::create($request->all());
        return redirect('automovel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Automovel  $automovel
     * @return \Illuminate\Http\Response
     */
    public function show(Automovel $automovel)
    {
        return view('automovel.show', ['automovel' => Automovel::findOrFail($automovel->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Automovel  $automovel
     * @return \Illuminate\Http\Response
     */
    public function edit(Automovel $automovel)
    {
        return view('automovel.edit')->with('automovel', $automovel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Automovel  $automovel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Automovel $automovel)
    {
        $this->validate($request, [
            'marca' => 'required:automovels',
            'modelo' => 'required:automovels',
            'placa' => 'required:automovels',
            'vl_venda' => 'required|numeric:automovels',
            'dt_fabricacao' => 'required|date:automovels',
        ]);
        $automovel->update($request->all());
        return redirect('automovel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Automovel  $automovel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Automovel $automovel)
    {
        $automovel->delete();
        return redirect('automovel');
    }
}
