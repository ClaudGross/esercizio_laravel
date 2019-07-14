@extends('layouts.mainlayout')
@section('content')
   <div class="album text-muted">
        <div class="container">

            <div class="row">
                <form class='form-inline' method="POST" action="{{ route('show') }}">
                        @csrf
                        <div class="form-group">
                            <label for="Nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="nome" name='nome' value=''>
                          </div>
                        <div class="form-group">
                            <label for="cognome">Cognome</label>
                            <input type="text" class="form-control" id="cognome" placeholder="cognome" name='cognome' value=''>
                          </div>
                        <div class="form-group">
                            <label for="voto">Voto</label>
                            <input type="text" class="form-control" id="voto" placeholder="voto" name='voto' value=''>
                          </div>
                    <button type="submit" class="btn btn-primary">invia</button>
                </form>
            </div>
        </div>
   </div>
@endsection
<b></b>