<?php

namespace App\Http\Controllers;

use App\Practicante;
use App\SubGrado;
use App\Grado;
use App\Http\Requests\PracticanteRequest;
use Facades\App\Facades\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PracticanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() // with('subGrados.grado')
    {
         $practicantes = Practicante::orderBy('pape_prac')
                            ->orderBy('nomb_prac')
                            ->paginate();

        return view('practicantes.index' , compact('practicantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $subGrados = SubGrado::with('grado')->get();
        $grados = Grado::with('subGrados')
                ->orderBy('abre_grad')
                ->get();


        return view('practicantes.create' , compact('grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PracticanteRequest $request)
    {   
         $request->validate();
        try
        {  
           
            DB::beginTransaction();

            /**
             * Registrar el practicante
             */

            $practicante = Practicante::create($request->all());

            /**
            * Grado del practicante
            */

           $practicante->subGrados()->sync($request->sub_grado_id); // TIENES QUE VALIDAR EL sub_grado_id

            DB::commit();

            return redirect()->route('practicantes.index')
                    ->with("success", "El Practicante ha sido registrado correctamente!");
        }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e)
        {
            DB::rollback();

            return redirect()->back()
                    ->with("danger", "Se ha producido un error al registrar el Practicante!")
                    ->withInput();
        }
        catch (\Exception $e)
        {
            DB::rollback();

            return redirect()->back()
                    ->with("danger", "Se ha producido un error al registrar el Practicante!")
                    ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function show(Practicante $practicante)
    {          
        // Opcion 2 para traer relacion en una sola consulta
        $practicante->load('subGrados.grado');

        return view('practicantes.show', compact('practicante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function edit(Practicante $practicante)
    {
        $grados = Grado::with('subGrados')
                ->orderBy('abre_grad')
                ->get();
        $practicante->load('subGrados.grado');
        return view('practicantes.edit', compact('practicante','grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function update(PracticanteRequest $request, Practicante $practicante)
    {   
        $request->validate();

        try
        { 
            DB::beginTransaction();
            
            $practicante->update($request->all());

            $practicante->subGrados()->sync($request->sub_grado_id);

            DB::commit();

            return redirect()->route('practicantes.index')
                ->with("success", "El Practicante ha sido actualizado correctamente!");

        }catch (\Symfony\Component\HttpKernel\Exception\HttpException $e){
            DB::rollback();

            return redirect()->back()
                    ->with("danger", "Se ha producido un error al actualizar el Practicante!")
                    ->withInput();
        }
        catch (\Exception $e)
        {
            DB::rollback();

            return redirect()->back()
                ->with("danger", "Se ha producido un error al actualizar el Practicante!")
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Practicante  $practicante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practicante $practicante)
    {
        //
    }
}
