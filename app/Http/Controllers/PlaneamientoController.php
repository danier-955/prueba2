<?php

namespace App\Http\Controllers;

use App\Planeamiento;
use App\Docente;
use App\Http\Requests\PlaneamientoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaneamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planeamientos = Planeamiento::all();  
        return view('planeamientos.index', compact('planeamientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = Docente::all();
        return view('planeamientos.create', compact('docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaneamientoRequest $request)
    {
        $request->validate();

        try
        {        

            $paneamiento = new Planeamiento;
            $paneamiento->titu_plan = $request->titu_plan;
            $paneamiento->fech_plan = $request->fech_plan;
            $paneamiento->docu_plan = $request->file('docu_plan')->store('public/planeaciones');
            $paneamiento->desc_plan = $request->desc_plan;
            $paneamiento->docente_id = $request->docente_id;
            $paneamiento->save();

            return redirect()->route('planeamientos.index')
                    ->with("success", "La Planeacion  ha sido registrado correctamente!");
        }
        catch (\Exception $e)
        {         
            return redirect()->back()
                    ->with("danger", "Se ha producido un error al registrarla Planeacion!")
                    ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planeamiento  $planeamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Planeamiento $planeamiento)
    {   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planeamiento  $planeamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Planeamiento $planeamiento)
    {
         $docentes = Docente::all();
        return view('planeamientos.edit', compact('planeamiento','docentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planeamiento  $planeamiento
     * @return \Illuminate\Http\Response
     */
    public function update(PlaneamientoRequest $request, Planeamiento $planeamiento)
    {
        $request->validate();

        try
        {      

            $planeamiento->titu_plan = $request->titu_plan;
            $planeamiento->fech_plan = $request->fech_plan;
            $planeamiento->docu_plan = $request->file('docu_plan')->store('public/planeaciones');
            $planeamiento->desc_plan = $request->desc_plan;
            $planeamiento->docente_id = $request->docente_id;
            $planeamiento->save();
         

            return redirect()->route('planeamientos.index')
                    ->with("success", "La Planeacion  ha sido Actualizado correctamente!");
        }
        catch (\Exception $e)
        {         
            return redirect()->back()
                    ->with("danger", "Se ha producido un error al Actualizado Planeacion!")
                    ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planeamiento  $planeamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planeamiento $planeamiento)
    {
        //
    }
}
