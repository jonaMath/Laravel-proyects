<h1>
Contacto  nombre: {{$nombre}}
y edad: {{isset($edad) && !is_null($edad) ? $edad : 'edad no existe'}}
{{--EJEMPLO IF--}}
@if(is_null($edad))
    <br>No existe la edad
@else
    <br>Si existe la edad: {{$edad}}
@endif
</h1>
<p>tabla del 2 con for</p>
@for($i=1; $i <=10; $i++)
{{$i.' x 2 ='.($i*2)}} <br>
@endfor
{{ $i = 1 }}
@while($i < 10)
    <p>{{'Hola mundo'.$i}}</p>
    <?php $i++; ?>
@endwhile
<h1>Listado de frutas F.each</h1>
@foreach($frutas as $fruta)
    <p>{{$fruta}}</p>
@endforeach
