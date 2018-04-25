<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Turno;

class TurnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $turno = new Turno;
        $turno->localizacion_inicio = $request->localizacion_inicio;
        $turno->user_id = $request->user_id;
        $turno->save();
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
        $now = Carbon::now();//Obtiene la hora y fecha actual
        $fecha_actual = $now->toDateString();//Obtiene solo la fecha
        //Consulta el ID del turno del usuario logueado
        $id = DB::table('turnos')
                ->join('users', 'users.id', '=', 'turnos.user_id')
                ->select('turnos.id')
                ->where('turnos.user_id', '=', $request->user_id)
                ->whereDate('turnos.created_at',  $fecha_actual)
                ->get();
        $turno = Turno::findOrFails($id);//Busca el turno con el ID obtenido en la consulta
        $turno->localizacion_fin = $request->localizacion_fin;
        $turno->update();
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
    }
}
