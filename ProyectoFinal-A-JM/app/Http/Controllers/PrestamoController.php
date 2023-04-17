<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Cliente;
use App\Models\Libro;
use Barryvdh\DomPDF\PDF;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestamo = Prestamo::all();
        return view('prestamo.index')->with('prestamo',$prestamo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $libroid = Libro::all();
        $clienteid = Cliente::all();
        return view('prestamo.create',compact('libroid','clienteid'));
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
        $prestamo = new Prestamo();
        $prestamo -> libro_id = $request -> libro_id;
        $prestamo -> cliente_id = $request -> cliente_id;
        $prestamo -> costo = $request -> costo;
        $prestamo -> save();
        return redirect()->route('prestamo.index');
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
        $prestamo = Prestamo::find($id);
        return $prestamo;
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
        $prestamo = Prestamo::find($id);
        $libroid = Libro::all();
        $clienteid = Cliente::all();
        return view('prestamo.edit',compact('libroid','clienteid'))->with('prestamo',$prestamo);

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
        //
        $prestamo = Prestamo :: find($id);
        $prestamo -> libro_id = $request -> libro_id;
        $prestamo -> cliente_id = $request -> cliente_id;
        $prestamo -> costo = $request -> costo;
        $prestamo -> save();
        return redirect()->route('prestamo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $prestamo = Prestamo::find($id);
        $prestamo -> delete();
        return redirect()-> route('prestamo.index');
    }

    public function generarPdf(){
        $prestamos = Prestamo::all();
        $pdf = \PDF::loadView('prestamo.generarpdf',compact('prestamos'));
        return $pdf->download('prestamos.pdf');
    }
}
