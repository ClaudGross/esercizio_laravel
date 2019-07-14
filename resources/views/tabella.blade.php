@extends('layouts.mainlayout')
@section('content')
<div class="container">
    <h2>Hover Rows</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>            
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Voto</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($alunni as $alunno)
          <tr>
            <td>{{$alunno["nome"]}}</td>
            <td>{{$alunno["cognome"]}}</td>
            <td>{{$alunno["voto"]}}</td>
          </tr> 
        @endforeach  
      </tbody>
    </table>
  </div>
  
@endsection
<b></b>