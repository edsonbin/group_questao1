<h1> Taxas por apartamento </h1>
<ul>
    <h2>{{$teste = $aps[1]['bloco']}}</h2><br>
    @foreach ($aps as $ap)
        @if (!($teste == $ap['bloco']))
            <h2>{{$teste = $ap['bloco']}}</h2><br>
        @endif

        <li>{{$ap["nro"]}}: R${{$ap['valorCondominio']}}</li>
    @endforeach
<ul>
