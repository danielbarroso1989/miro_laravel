<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class SitesController extends Controller
{

 public function home(){
    $nombre="daniel";
    
    return view('home/home')->with([
            'nombre'=>$nombre,
            'apellido'=>'barroso',
            'empresa'=>'socialand'
        ]);

 } 


}
