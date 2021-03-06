<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class PagesController extends Controller
{
    public function inicio(){
        $notas = Nota::all();
        return view('welcome',compact('notas'));

    }

    public function fotos(){
        return view('fotos');

    }

    public function blog(){
        return view('blog');

    }

    public function nosotros($nombre = null){
        $equipo = ['Axel','Moreno','Lino'];
        return view('nosotros',compact('equipo','nombre'));

    }
}
