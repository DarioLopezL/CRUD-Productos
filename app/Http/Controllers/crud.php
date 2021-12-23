<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class crud extends Controller
{
    public function index(){
        
        return view('index');
    }
    public function create(){
        
        return view('crear');
    }
    public function store(request $request){
        $productos = new producto();
        $productos->name = $request->name;
        $productos->tipo= $request->tipo;
        $productos->descripcion=$request->descripcion;
        
    $productos->save();
    
    return redirect()->route('crud.mostrar',$productos);
    
    }
    public function mostrar(){
        $productos= producto::paginate();
        return view('mostrar',compact('productos'));
    }
    public function unico($id){
        $productos = producto::find($id);
        return view('unico',compact('productos'));
    }
    public function editar(producto $productos){

        return view('editar',compact('productos'));
}
public function update(request $request,producto $productos){
    
        $productos->name = $request->name;
        $productos->tipo= $request->tipo;
        $productos->descripcion=$request->descripcion;
        $productos->save();
        return redirect()->route('crud.unico',$productos);
}
public function destroy(producto $productos){
    $productos->delete();
    return redirect()->route('crud.mostrar',$productos);
}

}
