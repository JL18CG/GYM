<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserPost;
use App\Http\Requests\UpdateUserPut;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
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


        $users = User::orderBy('created_at','desc')->paginate(20);
        return view('dashboard.admin.index', ['users' => $users]);
   }

   public function export(){
    return Excel::download(new UsersExport, 'usuarios.xlsx');
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.crear', ['admin' => new User()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPost $request)
    {
        User::create(
            [
                'email' => $request['email'],
                'password' =>  Hash::make($request['password']),
                'rol_id' =>'1'
            ]
        );
        return back()->with('status', 'Administrador creado con exito');
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
    public function edit(User $admin)
    {
        
        return view('dashboard.admin.actualizar', ["admin" => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPut $request, User $admin)
    {
        if($request['pass1']==null){
            $admin->update(
                [

                    'email' => $request['email'],

                ]
            );
        }else{
            $admin->update(
                [
                    'email' => $request['email'],
                    'password'=> Hash::make($request['pas1'])
                ]
            );

        }

        return back()->with('status', 'Usuario actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete();
        return back()->with('status', 'Usuario eliminado con exito');
    }
}
