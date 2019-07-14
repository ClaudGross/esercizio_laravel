<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>NewVotazione</title>
</head>
<body>
    <div> 
      <form method="post" action="{{ route('save')}}">
        @csrf

        Allievo:
        <input type="text" id="allievo" name="allievo" />
        <br />

        
        <label for="voto">Voto:</label>
        <input type="text" id="voto" name="voto" />
        <br />
        
        <label for="peso">peso:</label>
        <input type="text" id="peso" name="peso" />
        <br />

        <input type="submit" id="salva" name="salva" 
               value="salva" />
        <input type="submit" id="salva2" name="salva2"
               value="Salva e Prosegui" />
        <input type="button" value="annulla"
               onclick="window.location.href='..'" />
      </form>
    </div>
</body>
</html>
