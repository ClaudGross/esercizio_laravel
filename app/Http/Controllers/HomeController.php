<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // if ($request->session()->has('voti')) {

        //     $voti = session('voti');
        //     return view('tabella',['voti' => $voti]);
        // }     
        
        return view('demo');
    }

    public function show(Request $request)
    {
        $alunno = [
            'nome' => $request['nome'],
            'cognome' => $request['cognome'],
            'voto' => $request['voto']
        ];

        $alunni[] = $alunno;



        return view('tabella',['alunni' => $alunni]);
    }
}
