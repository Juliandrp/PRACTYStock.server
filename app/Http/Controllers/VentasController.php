<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\Bodega;
use App\User;
use App\Comprador;
use App\Producto;
use Auth;
class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
        return $ventas;
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
        $venta = new Venta;
        $venta->numero_factura = $request->numfactura;
        $user = User::findOrFail($request->id_user);
        $venta->id_user = $user->id;
        $venta->bodega_id = $user->bodega_id;//Obtiene el ID de la bodega a la que pertenece el usuario logueado
        $producto_id = Producto::where('imei', $request->imei)->first();//Consulta los datos del producto por el IMEI
        $venta->producto_id = $producto_id->id;//Obtiene el ID del producto obtenido en la consulta
        $comprador = Comprador::where('cedula', '=', $request->cedula)->first();//Consulta si existe un comprador con la cedula encviada
        if(!empty($comprador)){//Valida si existe ese comprador
            $venta->comprador_id = $comprador->id;//Guarda el ID del comprador obtenido
        }else{
            $comprador_nuevo = new Comprador;//Crea una instancia del comprador
            $comprador_nuevo->cedula = $request->cedula;
            $comprador_nuevo->nombre_completo = $request->nomcompleto;
            $comprador_nuevo->telefono = $request->telefono;
            $comprador_nuevo->email = $request->email;
            $comprador_nuevo->direccion = $request->direccion;
            $comprador_nuevo->barrio = $request->barrio;
            $comprador_nuevo->ciudad = $request->ciudad;
            $comprador_nuevo->departamento = $request->departamento;
            $comprador_nuevo->save();
        }
        $comprador_id = Comprador::max('id');//Obtiene el ultimo ID guardado en la tabla comprador
        $venta->comprador_id = $comprador_id;
        $venta->save();//Guarda la venta
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
        $bodegas = Bodega::all();
        $ventas = Venta::where('bodega_id', '=', $id)->with('producto', 'comprador')->paginate(1);
        return view('estadisticas', compact('ventas', 'bodegas'));
        
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
