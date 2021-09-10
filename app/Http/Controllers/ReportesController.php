<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bar;
use App\Buzon;
use App\Campus;
use App\Menu;
use App\Preferencias;
use App\Snack;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }
    public function index()
    {
        return view('reportes.index');
    }
    public function barpreferencias(Request $request)
    {   
        $bares= Bar::all()->sortBy('nombre');
        $menus=Menu::join('preferencias', 'menus.id', '=', 'preferencias.menu_id')
        ->join('bars', 'bars.id', '=' , 'menus.bar_id')
        ->select('bars.nombre as Nom','menus.nombre','preferencias.observacion','preferencias.fecha')
        ->where('menus.bar_id','=',$request->select)
        ->get();
        return view('reportes.barpreferencias',compact('bares','menus'));
       
    }
    public function buzonbar(Request $request)
    {   
        $bares= Bar::all()->sortBy('nombre');
        $buzons=Buzon::join('bars', 'bars.id', '=', 'buzons.bar_id')
        ->join('campuses', 'campuses.id', '=' , 'bars.campus_id')
        ->select('bars.nombre as Nom','campuses.nombre','buzons.fecha','buzons.descripcion')
        ->where('buzons.bar_id','=',$request->select)
        ->get();
        return view('reportes.buzonbar',compact('bares','buzons'));
    }
    public function graficasbarmenus(Request $request)
    {
        $bars=Bar::all();
        $bares=Bar::leftjoin('menus', 'menus.bar_id', '=' , 'bars.id')
        ->select('bars.nombre',DB::raw('count(menus.id) as Numero'))
        ->groupBy('bars.nombre')
        ->get();
        return view('reportes.graficasbarmenus',compact('bares','bars'));     
    }
}