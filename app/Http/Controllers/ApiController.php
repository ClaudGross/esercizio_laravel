<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('api');
    }

    public function media(Request $request)
    {
        $pesoTot = 0;
        $sommaTot = 0;
        $mediaCalc = 0;
        
        i {
            # code...
        }
        $alunni = isset($request->input())? $request->input() : null ;
        
        if ( $alunni != null ) {
            
            foreach ($alunni as $alunno) {
                $pesoTot += $alunno['peso'];
                $sommaTot += ($alunno['voto'] * $alunno['peso']);
            }
        
            $mediaCalc = $sommaTot / $pesoTot ;
        }

        return response()->json($mediaCalc);       
        


       

    }
}
