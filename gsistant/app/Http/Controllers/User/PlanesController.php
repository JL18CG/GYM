<?php

namespace App\Http\Controllers\User;

use App\User;
use Validator;
use App\Plane;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = Plane::all()->where('aprobado','si');
        
        //echo ('jdks');
        return view('dashboard.user.planes',['planes'=>$planes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.planes.crear', ['planes' => new Plane()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'id_user' =>'required',
            'nombre'=> 'required|min:3|max:30',
            'imagen'=> 'required',
            'nivelsuscripcion'=> 'required'
        ]);




        if($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert','Favor de llenar todos los campos')
            ->withErrors($validator);
        }else{

           /* $img = $request->file('imagen');


            $nombreImg = time().".".$img->getClientOriginalExtension();
            $rutaImg = public_path('imagenes');
            $request->$img->move($rutaImg,$nombreImg);*/

            
            Plane::create([
                'id_user' =>$request['id_user'],
                'nombre' => $request['nombre'],
                'imagen' => Storage::url($request->file('imagen')->store('public/imagenes')),
                
                'nivelsuscripcion' =>$request['nivelsuscripcion']
        ]);
            }
        return back()->with('status', 'Rutina creada con exito');

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
    public function destroy($id)
    {
        //
    }
}
