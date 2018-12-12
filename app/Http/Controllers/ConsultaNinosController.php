<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NinoFormRequest;
use App\cancer;
use App\nino;
use App\medicamentos;
use App\User;
use App\ciudad;
use DB;

class ConsultaNinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Medica = medicamentos::all();
        $Cancer = cancer::all();
        $Repres = User::where('rol','representante')->get();
        $Ciudad = ciudad::all();
        return view('fundacion.consultas.consulninos')->with('Cancer',$Cancer)->with('Medica',$Medica)->with('Repres',$Repres)
        ->with('Ciudad',$Ciudad);  



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
    /*
    Select U.id,U.name as NomRep, U.apellido as ApeRep, N.nombre as NomNin, N.id,N.apellido as ApeNin,C.tipo,MI.nombre as NomMedic,MIN.fechaSolicitud,MIN.estatus  
    from 
    users U 
    JOIN representantenino RN ON
    RN.users_id = U.id
    JOIN nino N ON
    N.id = RN.nino_id
    JOIN cancernino CN ON
    CN.nino_id = N.id
    JOIN cancer C ON
    C.id = CN.cancer_id
    JOIN medicamentoinsumonino MIN ON
    MIN.nino_id = N.id
    JOIN medicamentoinsumo MI ON
    MI.id = MIN.medicamentoInsumo_id
    where U.rol = "Representante"
    */

    $ninos = DB::table('users AS U')
        ->select('U.id',DB::raw('U.name as NomRep'),DB::raw('U.apellido as ApeRep'),DB::raw('N.nombre as NomNin'),DB::raw('N.apellido as ApeNin'),'C.tipo',DB::raw('MI.nombre as NomMedic'),'MIN.fechaSolicitud','MIN.estatus')
        ->join('representantenino AS RN','RN.users_id','=','U.id')
        ->join('nino AS N','N.id','=','RN.nino_id')
        ->join('cancernino AS CN','CN.nino_id','=','N.id')
        ->join('cancer AS C','C.id','=','CN.cancer_id')
        ->join('medicamentoinsumonino AS MIN','MIN.nino_id','=','N.id')
        ->join('medicamentoinsumo AS MI','MI.id','=','MIN.medicamentoInsumo_id')
        ->where('U.rol','=','Representante')
        ->orWhere('MI.id','=',$request->medicamento)
        ->orWhere('C.id','=',$request->cancer)
        ->orWhere('U.ciudad_id','=',$request->ciudad)
        ->get();


        return view('fundacion.resultadoConsulta.resultados')->with('ninos',$ninos);



       // dd($ninos);
        //en el archivo de routes tipo web debes crear una ruta así
        //Route::post('fundacion/ResultadoConsulta','ConsultaNinosCOntroller@store');
        //Hacer return view hacia la vista que necesites
        //return view('Tu_Nueva_Vista')->with('ninos',$ninos);
        // para hacer el ciclo en la vista es algo así
        //$nino->NomRep va a ser los nombres que les asignó a los campos
        //De todas maneras aqui estan todo


        //@foreach($ninos as $nino)
        //  {{$nino->NomRep}}
        //  {{$nino->nomRep}}
        //  {{$nino->ApeRep}}
        //  {{$nino->NomNin}}
        //  {{$nino->ApeNin}}
        //  {{$nino->tipo}}
        //  {{$nino->NomMedic}}
        //  {{$nino->fechaSolicitud}}
        //  {{$nino->estatus}}
        //@endforeach


    
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
