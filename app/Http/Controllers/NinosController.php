<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*Todos los requests y modelos que vayas a crear a utilzar en el controlador se deben declarar 
en esta parte*/
use App\Http\Requests\NinoFormRequest;
use App\cancer;
use App\nino;
use App\medicamentos;
use App\representante;
use Auth;
use App\representantenino;
use App\cancerNino;
use App\medicamentoinsumonino;


class NinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Medica = medicamentos::all();
        $Cancer = cancer::all();
         return view('fundacion.nino.regnino')->with('Cancer',$Cancer)->with('Medica',$Medica);  
       

        //$arrData = array('test1'=>$val1, 'test2'=>$val3,'test3'=>$val3);
        //return view('welcome',$data);

       
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
    public function store(NinoFormRequest $request)
    {
        
        

       /*dd($request->all());*/
        $Ninos = New nino();
        $Ninos->nombre = $request->input('nombre');
        $Ninos->apellido = $request->input('apellido');
        $Ninos->edad = $request->input('edad');
       // $Ninos->descripcion = $request->input('descripcion');
        $Ninos->save();
        

        // modelo que debes instanciar en la parte superior 
        // relaciono las tablas (obtengo el id)

        $NinoCancer = new CancerNino();
        $NinoCancer->nino_id = $Ninos->id;
        $NinoCancer->cancer_id = $request->input('cancer');
        $NinoCancer->save();

        $reprenino = New representantenino();
        $reprenino->nino_id = $Ninos->id;
        $reprenino->users_id = Auth::user()->id;
        $reprenino->save();



        //medicamentos por niño//

        foreach ($request->input('medicamento') as $value) {

                $medicamentosNinos = new medicamentoinsumonino();
                $medicamentosNinos->fechaSolicitud = date('Y-m-d');
                $medicamentosNinos->estatus = "'Pendiente'";
                $medicamentosNinos->nino_id = $Ninos->id;
                $medicamentosNinos->medicamentoInsumo_id = $value;
                $medicamentosNinos->save();

         }

         //dd($medicamentosNinos);
       return redirect('fundacion/ninos')->with('success','Registro Exitoso');
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
