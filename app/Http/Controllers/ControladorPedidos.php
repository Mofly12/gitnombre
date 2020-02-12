<?php

namespace App\Http\Controllers;

use App\DetallePedidos;
use App\Pedido;
use App\Producto;
use Illuminate\Http\Request;

/*
* @var DetallePedidos $detallePedido
*/
/*
* * @var Producto $producto
*/

class ControladorPedidos extends Controller
{
    function agregar(Request $request)
    {
        $id = $request->input("id") ?? "";
        $cantidad = $request->input("cantidad");
        $modificar = $request->input("modificar") ?? "";
        $arrayDetallesPedidos = session()->get("pedido") ?? "";
        $producto = "";
        $error = false;

        if (!empty($id)) {
            $producto = Producto::find($id);

            if (!empty($arrayDetallesPedidos)) {
                for ($i=0; $i < sizeof($arrayDetallesPedidos); $i++) {
                    echo "cantidad: " . $arrayDetallesPedidos[$i]->quantity;
                    if ($arrayDetallesPedidos[$i]->product_id == $id) {


                        echo "cantidad: " . $arrayDetallesPedidos[$i]->quantity;

                        if (empty($modificar)){
                            echo "entre";
                            $arrayDetallesPedidos[$i]->quantity = (int)$arrayDetallesPedidos[$i]->quantity + (int)$cantidad;

                            foreach ($arrayDetallesPedidos as $key => $value) {
                                echo $value;
                            }
                        }else {
                            $arrayDetallesPedidos[$i]->quantity = $cantidad;
                        }
                    }
                }
                /*
                foreach ($arrayDetallesPedidos as $detalle) {
                    if ($detalle->product_id == $id){
                        $detalle->quantity += $cantidad;
                        echo "hola" . $detalle->quantity;
                    }
                }
                */

            } else {
                $detallePedido = new DetallePedidos();
                $detallePedido->product_id = $producto->product_id;
                $detallePedido->price = $producto->price;
                $detallePedido->quantity = $cantidad;
                if (empty($arrayDetallesPedidos)) {
                    $arrayDetallesPedidos = [$detallePedido];
                } else {
                    $arrayDetallesPedidos[] = $detallePedido;
                }
                echo "entre";


            }
            /*
            $primerCarritoMayorQue2 = Pedido::all()
                ->first(function($value,$key){
                    return 2 < $value->ordersProducts->count();
                })
                ->ordersProducts;

            foreach ($primerCarritoMayorQue2 as $key => $value) {
                echo $value . "<br/>";
            }
            die();
*/
            session()->put("pedido", $arrayDetallesPedidos);
        }else{
            $error = true;
        }
        if ($error){
            echo "<p>ha ocurrido un error</p>";
        }else{
            return redirect('/');
        }
    }
}
