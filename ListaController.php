<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\estudiantes; //Modelo
class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estudiante = estudiantes::all();
        //return $estudiante;
        return view ('VistaEstudiantes', compact('estudiante'));

        //$texto=trim($request->get ('texto'));
        //$estudiante=DB::table ('estudiantes')->select('Matricula','Nombre','Direccion')
        //->where ('matricula','=',$texto)->paginate(10); 
        //return view ('VistaEstudiantes', compact('estudiante',$texto));
        
       // $texto=trim($request->get ('texto'));
        //$estudiante=DB::table ('estudiantes')->select('Matricula','Nombre','Direccion')
        //->where ('nombre','LIKE',"%$texto%")->paginate(10); 
        //return view ('VistaEstudiantes', compact('estudiante',$texto));
    }

    public function destroy($id)
    {
    $estudiante= estudiantes::find($id);
    //dd($estudiante);
    $estudiante->delete();
    return redirect()->route('Lista.index');
    }

    public function edit($id)
    {
        $estudiante = estudiantes::whereId($id)->firstOrFail();
        return view('EditaEstudiante', compact('estudiante'));
    }

    public function update(Request $request, $id)
    {
      $estudiante= estudiantes::findOrFail($id);
      $estudiante->Matricula = $request->input('Matricula');
      $estudiante->Nombre =$request->input('Nombre');
      $estudiante->Direccion =$request->input('Direccion');
      $estudiante->save();
      return redirect()->route('Lista.index');
    }

}