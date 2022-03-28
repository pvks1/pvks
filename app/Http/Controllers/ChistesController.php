<?php

namespace App\Http\Controllers;
use App\Models\Chiste;
use Illuminate\Http\Request;




class ChistesController extends Controller
{
    public function __invoke(){
        $objetos=[];

        $objeto=Chiste::all();
        foreach ($objeto as $chiste){
            $chistex['titulo']=$chiste->titulo;
            $chistex['nombre']=$chiste->chiste;
            $objetos[]=$chistex;
        }

        return view('pruebas', ['paquete'=>$objetos]);
    }

    public function guardachiste($titulo='',$chiste=''){

        $modelochiste=new Chiste();
      //  $titulo='2medio';
      //  $chiste="Van dos y se cae el del medio";
        $modelochiste->titulo=$titulo;
        $modelochiste->chiste=$chiste;
        $modelochiste->save();

      //  $array['nombre']='Juan';
      //  $array['datos']=['dni'=>'63524411R','direccion'=>'C/San Luis, Nº7 1º1ª'];
      //  return view('pruebas',$array);

    }
}



//'<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Document</title></head><body><p>Hola pepsicolaaaaaaa</p></body></html>';
