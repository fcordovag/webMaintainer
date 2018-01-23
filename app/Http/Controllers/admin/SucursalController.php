<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comuna;
use App\Work;
use App\Sucursal;
use DB;

class SucursalController extends Controller
{
    public function index()
    {
    	/*$comunas = DB::table('sucursals')
            ->join('comunas', 'sucursals.comuna_id', '=', 'comunas.id')
            ->join('works', 'sucursals.work_id', '=', 'works.id')
            ->select('sucursals.*', 'comunas.name as comu','works.name','works.email')
            ->get();
        */
        $sucursales = Sucursal::where('status','=',1)->paginate(5);
    	return view('Admin.Sucursal.inicio')->with(compact('sucursales'));
    }
    public function create()
    {
    	$comunas = Comuna::all();
    	$works = Work::where('status','=',1)->get();
    	return view('Admin.Sucursal.create')->with(compact('comunas','works'));
    }
     public function store(Request $request)
    {
    	//validar datos
    	$messages = [
    		'address.required'    => 'Es necesario ingresar una direccion',
    		'address.min'         => 'La direccion debe tener al menos 3 caracteres',
    		'comuna.required'     => 'Debe seleccionar una comuna para la sucursal',
    		'encargado.required'  => 'Debe seleccionar un encargado'
    	];
    	$rules = [
    		'address'    => 'required|min:3',
    		'comuna'     => 'required',
    		'encargado'  => 'required'
    	];
    	$this->validate($request, $rules, $messages);
    	//registra nuevo producto en la base de datos
    	//dd($request->all()); //dd permite imprimir ty finalizar la respuesta del servido
    	$suc = new Sucursal();
    	$suc->address     = $request->input("address");
    	$suc->status      = 1;
    	$suc->comuna_id   = $request->input('comuna');
    	$suc->work_id     = $request->input('encargado');
    	$suc->save(); //insert sobre la tabla producto
    	return redirect('/sucursales');
    }
    public function delete($id)
    {	
    	//dd($id);
    	$suc = Sucursal::find($id);
    	$suc->status      = 0;
    	$suc->save();
    	return back();
    }
    public function edit($id)
    {
    	$comunas = Comuna::all();
    	$works   = Work::where('status','=',1)->get();
    	$suc     = Sucursal::find($id);

    	return view('Admin.Sucursal.edit')->with(compact('suc','comunas','works'));
    }
    public function update(Request $request,$id)
    {
    	  	$messages = [
    		'address.required'    => 'Es necesario ingresar una direccion',
    		'address.min'         => 'La direccion debe tener al menos 3 caracteres',
    		'comuna.required'     => 'Debe seleccionar una comuna para la sucursal',
    		'encargado.required'  => 'Debe seleccionar un encargado'
    	];
    	$rules = [
    		'address'    => 'required|min:3',
    		'comuna'     => 'required',
    		'encargado'  => 'required'
    	];
    	$this->validate($request, $rules, $messages);
    	$suc = Sucursal::find($id); //se trae los datos de la sucursal
    	$suc->address     = $request->input("address");
    	$suc->status      = 1;
    	$suc->comuna_id   = $request->input('comuna');
    	$suc->work_id     = $request->input('encargado');
    	$suc->save();
    	return redirect('/sucursales');
    }
}
