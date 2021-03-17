<?php

namespace App\Http\Controllers;

use App\Models\Contactano;
use Illuminate\Http\Request;

class ContactanoController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        
        if ($buscar==''){
            $contactos = Contactano::orderBy('id', 'desc')->paginate(3);
        }
        else{
            $contactos = Contactano::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(3);
        }
        
    
        return [
            'pagination' => [
                'total'        => $contactos->total(),
                'current_page' => $contactos->currentPage(),
                'per_page'     => $contactos->perPage(),
                'last_page'    => $contactos->lastPage(),
                'from'         => $contactos->firstItem(),
                'to'           => $contactos->lastItem(),
            ],
            'contactos' => $contactos
        ];
    }

   

    
    public function store(Request $request)
    {
        // if (!$request->ajax()) return redirect('/');
        $contacto = new Contactano();
        $contacto->apellidos = $request->apellidos;
        $contacto->nombres = $request->nombres;
        $contacto->dni = $request->dni;
        $contacto->fecha_nacimiento = $request->fecha_nacimiento;
        $contacto->email = $request->email;
        $contacto->celular = $request->celular;
        $contacto->tipo_servicio = $request->tipo_servicio;
        $contacto->comoseentero = $request->comoseentero;
        $contacto->save();
    }


    public function update(Request $request)
    {
        // if (!$request->ajax()) return redirect('/');
        $contacto = Contactano::findOrFail($request->id);
        $contacto->apellidos = $request->apellidos;
        $contacto->nombres = $request->nombres;
        $contacto->email = $request->email;
        $contacto->telefono = $request->telefono;
        $contacto->asunto = $request->asunto;
        $contacto->save();
    }

    public function destroy(Request $request){
        $contacto=Contactano::findOrFail($request->id);
        $contacto->delete();
    }

}
