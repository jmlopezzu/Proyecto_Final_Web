<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proovedor;
use Barryvdh\DomPDF\PDF;

class ProovedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proovedor = Proovedor::all();
        return view('proovedor.index')->with('proovedor',$proovedor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proovedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $proovedor = new Proovedor();
        $proovedor -> nombre = $request -> nombre;
        $proovedor -> apellido = $request -> apellido;
        $proovedor -> celular = $request -> celular;
        $proovedor -> nit = $request -> nit;
        $proovedor -> save();
        return redirect()->route('proovedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proovedor = Proovedor::find($id);
        return view('proovedor.edit')->with('proovedor',$proovedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$proovedor = Proovedor::findOrFail($id);
        $proovedor = Proovedor::find($id);
        $proovedor -> nombre = $request -> nombre;
        $proovedor -> apellido = $request -> apellido;
        $proovedor -> celular = $request -> celular;
        $proovedor -> nit = $request -> nit;
        $proovedor -> save();
        return redirect()->route('proovedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proovedor = Proovedor::destroy($id);
        return redirect()->route('proovedor.index');
    }

    public function generarPdf(){
        $proovedor = Proovedor::all();
        $pdf = \PDF::loadView('proovedor.generarpdf',compact('proovedor'));
        return $pdf->download('proovedores.pdf');
    }
}
