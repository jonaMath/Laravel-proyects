<h1>Listado de frutas F.each</h1>
<a href="{{ action('FrutasController@naranjas') }} ">ir a naranjas</a>
<a href="{{ action('FrutasController@peras') }} ">ir a peras</a>


<ul>
    @foreach($frutas as $fruta)
        <li>{{$fruta}}</li>
    @endforeach
</ul>

<h1>Formulario en laravel</h1>

<form action="{{ url('/recibir') }}" method="post">
    @csrf
    <p>
        <label for="nombre">Nombre de la fruta:</label>
        <input type="text" name="nombre">
    </p>
    <p>
        <label for="descripcion">Descripción de la fruta:</label>
        <textarea name="descripcion"></textarea>
    </p>
    <input type="submit" value="Enviar">
</form>
