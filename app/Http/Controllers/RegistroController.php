<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class RegistroController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        $alunni = array();

        if(Cache::has('alunni')){
            $alunni = Cache::get('alunni');
        }

        return view('registro.index',['alunni'=>$alunni]);
    }


    public function new()
    {
        return view('registro.newVotazione');
    }


    public function save(Request $request)
    {
        $alunni = array();

        if(Cache::has('alunni')){
            $alunni = Cache::pull('alunni');
        }

        $alunno = array(
            'allievo' => $request['allievo'],
            'voto' => $request['voto'],
            'peso' => $request['peso']
        );

        array_push($alunni, $alunno );

        Cache::put('alunni',$alunni,120);

        if (isset($request['salva2'])) {
            return redirect()->action('RegistroController@new');
        }
        return redirect()->route('index');

        
    }
}
