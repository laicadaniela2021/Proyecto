<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Snack;
use App\Campus;
use App\Bar;
use App\Buzon;
use App\Preferencia;

class PublicController extends Controller
{
    public function index(){
        $mensaje="Hola mundo";
        $campuses=Campus::all();
        $bars=Bar::all();
        $menus= Menu::all();
        $snacks= Snack::all();
        $reportes= Preferencia::all();
        return view('welcome',compact('mensaje','menus','snacks','campuses','bars','reportes'));
    }  
}
