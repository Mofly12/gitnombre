<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Producto;

class ControladorProductos extends Controller
{
    //
    public function listar(){

        $productos = Producto::paginate(3);
        return view('listarProductos',['productos' => $productos]);
/*
       $producto = new Producto();
       $producto->name="menos de 20";
       $producto->price=10;
       $producto->stock=15;




        $producto->save();*/

       /* Producto::create([
        'nombre' => 'mipapit',
        'precio' => 80.00,
        ]);

        //$productos = Producto::all(); //compact('productos')
        //return view('listarProductos',compact('productos'));

        //return view('listarProductos',[ 'productos' => $productos]);

        echo $productos[1]['nombre'];
        foreach ($productos as $product){
            echo $product . "<br/>";
*/
    }
    function mostrarProductoUnico(Request $request){
        $id = $request->input("id") ?? "";
        if (!empty($id)){
        $producto = Producto::find($id);
        return view('MostrarProducto',compact('producto'));
        }
    }


}
