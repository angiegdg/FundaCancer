<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*Todos los requests y modelos que vayas a crear a utilzar en el controlador se deben declarar 
en esta parte*/
use App\Http\Requests\MedicamentoFormRequest;
use App\medicamentos;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Medica = medicamentos::all();
        //$arrData = array('test1'=>$val1, 'test2'=>$val3,'test3'=>$val3);
        //return view('welcome',$data);

        return view('fundacion.medicamento.regmedi')->with('Medica',$Medica); ;  
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
    public function store(MedicamentoFormRequest $request)
    {
        
      
        $Medicamentos = New medicamentos();
        $Medicamentos->nombre = $request->input('nombre');
        
        $Medicamentos->save();

        

        return redirect('fundacion/medicamento')->with('success','Registro Exitoso');
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
