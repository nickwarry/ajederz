@extends('adminlte::page')

@section('title', 'peon')

@section('content_header')
    <h1>Peón</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-6">
            <table class="table table-bodered table-stiped table-hover">
                <thead>
                    <th>N°</th>
                    <th>item</th>
                    <th>descripcion</th>
                    <th>GRAFICO</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>movimiento</td>
                        <td>El peón se mueve hacia adelante una o dos 
                            casillas en su primer movimiento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>como captura</td>
                        <td>La captura de un peón en ajedrez se realiza al 
                            moverse diagonalmente hacia adelante,</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>trucos</td>
                        <td>Un truco común relacionado con los peones es "en passant". Permite capturar un 
peón enemigo que avanza dos casillas desde su 
posición inicial. Si no se captura en el siguiente 
movimiento, se pierde la oportunidad.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>curiosidades</td>
                        <td>Aunque los peones son las piezas más numerosas en el tablero y 
                            parecen relativamente débiles en comparación con las demás, pueden llegar 
                            a ser muy poderosos cuando avanzan hacia la octava fila y se promocionan. 
                            Esta capacidad de transformación de los 
                            peones en piezas más fuertes es única en el ajedrez </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>como nacio</td>
                        <td>El ajedrez, como juego, tiene una historia que se remonta a varios siglos atrás. Aunque 
                            su origen exacto no está completamente claro, se cree que el ajedrez se desarrolló en la India alrededor del 
                            siglo VI d.C. bajo el nombre de "chaturanga". Este juego temprano tenía algunas similitudes con el ajedrez moderno, aunque 
                            tenía algunas diferencias significativas en las reglas y en la disposición del tablero.

Desde la India, el juego se extendió a Persia, donde fue conocido como "shatranj". Durante el 
período islámico, el ajedrez se propagó por el mundo islámico y luego llegó a Europa a través de España y otras rutas comerciales en la Edad Media.

 
</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <img src="{{ asset('imgs/peon.jpg')}}">
        </div>
    </div>
  
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop@