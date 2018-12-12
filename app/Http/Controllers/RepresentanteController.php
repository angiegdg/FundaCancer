<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*Todos los requests que voy a utilizar*/
use App\Http\Requests\RepresentanteFormRequest;
/*modelos que voy a utilizar*/
use App\ciudad;   
use App\User;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Ciudad= ciudad::all(); /*llamo al model ciudad*/
        return view('fundacion.representante.regrepresentante')->with('Ciudad',$Ciudad);

        

    }

     public function login2() 
    {
        return redirect('function/ninos');
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
    public function validateEmail($email)
    {
        $User = User::where('email',$email)->count();
        if($User == 0)
        {
            return response()->json(['message'=>'Disponible']);
        }else
        {
            return response()->json(['message'=>'Ocupado']);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RepresentanteFormRequest $request)
    {
        //


        //dd($request->all());
      

        $Repres=new User();
        $Repres->name = $request->input('name');
        $Repres->apellido = $request->input('apellido');
        $Repres->email = $request->input('email');
        $Repres->telefono = $request->input('telefono');
        $Repres->rol = $request->input('Rol');
        $Repres->password = \Hash::make($request->password); 
        $Repres->ciudad_id = $request->input('ciudad');
        $Repres->save();
            

        
        

        /*
        // modelo que debes instanciar en la parte superior
        $NinoCancer = new NinoCancer();
        $NinoCancer->nino_id = $Ninos->id;
        $NinoCancer->cancer_id = $request->input('NameOfSelect');
        $NinoCancer->save();

        */

        return redirect('fundacion/representante')->with('success','Registro Exitoso');


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
