<?php

namespace App\Http\Controllers;
use App\declaration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeclaCOntroller extends Controller
{
    public function decla()
    {
        $declarations = DB::table('declarations')->where ('etat' ,'==', 0)->get();
        return view ('admin.declarations')->with('declarations',$declarations);
       
    }
    public function declaeffec()
    {
        $declarations = DB::table('declarations')->where ('etat' ,'!=', 0)->get();
       
        return view ('admin.declaration_effec')->with('declarations',$declarations);
    }
    public function declaupdateEtat($id,$idag)
    {   $declarations = declaration::find($id);
        $declarations->etat = 1;
        $declarations->agent = $idag;
        $declarations->update();
        
        return redirect('dashboard');
    }
    //
    public function declanor()
    {
        $declarations = DB::table('declarations')->where ('etat' ,'==', 0)->get();
        return view ('normal.declarations')->with('declarations',$declarations);
       
    }
    public function declaeffecnor()
    {
        $declarations = DB::table('declarations')->where ('etat' ,'!=', 0)->get();
       
        return view ('normal.declaration_effec')->with('declarations',$declarations);
    }
    public function declaupdateEtatnor($id,$idag)
    {   $declarations = declaration::find($id);
        $declarations->etat = 1;
        $declarations->agent = $idag;
        $declarations->update();
        
        return redirect('dashboardnor');
    }
}
