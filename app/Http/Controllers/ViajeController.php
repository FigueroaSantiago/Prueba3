<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ViajeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $viajes = Viaje::paginate();

        return view('viaje.index', compact('viajes'))
            ->with('i', ($request->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $viaje = new Viaje();

        return view('viaje.create', compact('viaje'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ViajeRequest $request): RedirectResponse
    {
        $viaje = new Viaje();
        $viaje->titulo = $request->titulo;
        $viaje->descripcion = $request->descripcion;
        $viaje->precio = $request->precio;
        $viaje->fechaSalida = $request->fechaSalida;
        $viaje->fechaLlegada = $request->fechaLlegada;

        if($request->hasFile('img')){
            $path = $request->file('img')->store('fotos','public');
            $viaje->img = $path;
        }

        if($request->hasFile('pdf')){
            $path = $request->file('pdf')->store('pdfs','public');
            $viaje->pdf = $path;
        }

        $viaje->save();

        return redirect()->route('viajes.index')->with('success','Se ha creado el paquete de viaje');

    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $viaje = Viaje::find($id);

        return view('viaje.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $viaje = Viaje::find($id);

        return view('viaje.edit', compact('viaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ViajeRequest $request, Viaje $viaje): RedirectResponse
    {
        $viaje->update($request->validated());

        return Redirect::route('viajes.index')
            ->with('success', 'Viaje updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Viaje::find($id)->delete();

        return Redirect::route('viajes.index')
            ->with('success', 'Viaje deleted successfully');
    }
}
