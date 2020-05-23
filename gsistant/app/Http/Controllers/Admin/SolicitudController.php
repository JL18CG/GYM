<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Solicitude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
        $this->middleware('auth');
        $this->middleware('rol.admin');
    }

    
    public function index()
    {

        $solis = DB::table('solicitudes')
            ->join('users', 'users.id', '=', 'solicitudes.id_user')
            ->join('rutinas', 'users.id', '=', 'rutinas.id_user')
            ->select('solicitudes.*', 'users.email','rutinas.aprobado')
            ->get();

        return view('dashboard.admin.solicitud.index', ['solis' => $solis]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitude $solicitude)
    {
   
        $solicitude->delete();
        return back()->with('status', 'Solicitud Eliminada Correctamente');
    }
}
