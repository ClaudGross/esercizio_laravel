<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Index</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <h1>Votazioni Studenti</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                <th>Allievo</th>
                <th>Voto</th>
                <th>Peso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunni as $alunno)
                <tr>
                    <td>{{$alunno["allievo"]}}</td>
                    <td>{{$alunno["voto"]}}</td>
                    <td>{{$alunno["peso"]}}</td>
                </tr> 
                @endforeach  
            </tbody>
        </table>
    </div>
    <p>
        <input type="button" onclick="window.location.href='/registro/new'" value="Nuovo"/>
        <input type="button" id="Calcola" onclick="myFunction()" value="Calcola Media"/>
    <p/>
    <input type="text" id="Media"/>
    <p id="media"></p>
    <script>
        function media() {    
            var alunni ={{ json_encode($alunni)}};
            $.ajax({
                url: '/api/media',
                type: 'POST',
                dataType: 'json',
                data: { alunniArr : alunni },
                success: function (response) {
                    console.log(response);
                    //$("#Media").val(res);
                },
                error: function (response) {
                    $("#Media").val("Error calling web service");
                }
            });    
        }

        function myFunction() {
            document.getElementById("media").innerHTML = "Hello World";
          }
    </script>
</body>
</html>
