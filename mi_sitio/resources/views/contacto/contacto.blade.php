{{--comentario en HTML--}}

 @include('contacto.cabecera')
<h1>Hola mi nombre es {{$nombre}} y tengo {{--isset($edad) && !is_null($edad) ? $edad : 'No existe la edad'--}} años</h1>

{{--Condicional If--}}
@if(is_null($edad))
    No existe la edad
@else
    Si existe la edad: {{$edad}}
@endif
{{--Bucle For--}}
<?php $numero = 10; ?>
<br>
Tabla de {{$numero}}:
@for($i=1; $i<=10; $i++)
<br/>    {{$i.' x '.$numero.' = '.($i*$numero)}}
@endfor
{{--Bucle While--}}

<?php $r=1;?>
@while($r<=7)
<br>
    {{'Hola Mundo'.$r}}
    <?php $r++; ?>

@endwhile

{{--Bucle ForEach--}}

<h1>Listado de frutas</h1>
@foreach($frutas as $fruta)
    <br>{{$fruta}}

@endforeach


@include('contacto.cabecera')
