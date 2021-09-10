<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;
use App\Snack;
use App\Campus;
use App\Bar;
class PubController extends Controller
{
    public function index(){
        $campuses=Campus::all();
        $bars=Bar::all();
        $menus= Menu::all();
        $snacks= Snack::all();
        return view('example',compact('menus','snacks','campuses','bars'));
    }
    
}
