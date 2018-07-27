<?php

namespace App\Http\Controllers;

use App\Docente;
use App\Empleado;
use App\Http\Requests\DocenteRequest;
use App\TipoEmpleado;
use App\User;
use Facades\App\Facades\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DocenteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();

        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoEmpleados = TipoEmpleado::all();

        return view('docentes.create', compact('tipoEmpleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocenteRequest $request)
    {
        try
        {
            $request->validate();

            DB::beginTransaction();

            /**
             * Registrar el usuario
             */
            $datos = [
                'nombre' => trim("{$request->nomb_doce} {$request->pape_doce} {$request->sape_doce}"),
                'email' => $request->corr_doce,
                'password' => bcrypt("ipca{$request->docu_doce}"), // Clave predeterminada por ahora
                'estado' => Estado::activo(),
            ];

            $usuario = User::create($datos);

            /**
             * Registrar el empleado
             */
            $empleado = Empleado::create($request->only('fech_ingr', 'obse_empl', 'tipo_empleado_id'));

            /**
             * Registrar el docente
             */
            $request->merge([
                'empleado_id' => $empleado->id,
                'user_id' => $usuario->id,
            ]);

            $docente = Docente::create($request->except('fech_ingr', 'obse_empl', 'tipo_empleado_id'));

            DB::commit();

            //envio de contraseña
            
            Mail::send('emails.bienvenida', $datos ,function($message) use ($datos){
                $message->to($datos['email'] , $datos['nombre'])->subject('Bienvenido');
            });

            return redirect()->route('docentes.index')
                    ->with("success", "El docente ha sido registrado correctamente!");
        }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e)
        {
            DB::rollback();

            return redirect()->back()
                    ->with("danger", "Se ha producido un error al registrar el docente!")
                    ->withInput();
        }
        catch (\Exception $e)
        {
            DB::rollback();

            return redirect()->back()
                    ->with("danger", "Se ha producido un error al registrar el docente!")
                    ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        $tipoEmpleados = TipoEmpleado::all();

        return view('docentes.edit', compact('docente', 'tipoEmpleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(DocenteRequest $request, Docente $docente)
    {
        try
        {
            $request->validate();

            DB::beginTransaction();

            /**
             * Actualizar el usuario
             */
            $docente->user->update([
                'nombre' => trim("{$request->nomb_doce} {$request->pape_doce} {$request->sape_doce}"),
                'email' => $request->corr_doce,
            ]);

            /**
             * Actualizar el empleado
             */
            $docente->empleado->update($request->only('fech_ingr', 'obse_empl', 'tipo_empleado_id'));

            /**
             * Actualizar el docente
             */
            $docente->update($request->except('fech_ingr', 'obse_empl', 'tipo_empleado_id'));

            DB::commit();

            return redirect()->route('docentes.index')
                    ->with("success", "El docente ha sido actualizado correctamente!");
        }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e)
        {
            DB::rollback();

            return redirect()->back()
                    ->with("danger", "Se ha producido un error al actualizar el docente!")
                    ->withInput();
        }
        catch (\Exception $e)
        {
            DB::rollback();

            return redirect()->back()
                    ->with("danger", "Se ha producido un error al actualizar el docente!")
                    ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        //
    }
}
