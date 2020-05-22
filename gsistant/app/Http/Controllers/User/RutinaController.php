<?php

namespace App\Http\Controllers\User;

use App\User;
use Validator;
use App\Rutina;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $rutinas = Rutina::all()->where('nivelsuscripcion',auth()->user()->suscripcion)->where('aprobado','si');
        //$rutinas2 =Rutina::all()->where('id_user',auth()->user()->id);
        
   //echo('djsalkfjhlkdfjm');
    //dd($rutinas);
    return view('dashboard.user.rutina',['rutinas'=>$rutinas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.rutinas.crear', ['rutina' => new Rutina()]);
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

            
            Rutina::create([
                'id_user' =>$request['id_user'],
                'nombre' => $request['nombre'],
                'imagen' => Storage::url($request->file('imagen')->store('public/imagenes')),
                
                'nivelsuscripcion' =>$request['nivelsuscripcion']
        ]);
            }
        return back()->with('status', 'Rutina creada con exito');

        /*Rutina::create(
            [   'id_user' =>$request['id_user'],
                'nombre' => $request['nombre'],
                'imagen' => 'default.jpg'
                'nivelsuscripcion' =>$request['nivelsuscripcion']
            ]
        );
        return back()->with('status', 'Rutina creada con exito');
*/
      /*  if(($img==null)){

            Rutina::create([
                'id_user' =>$request['id_user'],
                'nombre' => $request['nombre'],
                'imagen' => 'default.jpg',
                'nivelsuscripcion' =>$request['nivelsuscripcion']
        ]);
        }else{*/
        
        //}
        
        //return back()->with('status', 'Rutina creada con exito');
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
        $rutina->delete();
        return back()->with('status', 'Rutina eliminada con exito');
    }
}
