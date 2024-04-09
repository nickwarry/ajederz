@extends('adminlte::page')

@section('title', 'TORRE')

@section('content_header')
        <div class="text-center">La pieza de la torre</div>
            <table class="table table-bordered table-striped table-hover">
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
                        <td>la torre se mueve recto o a la derecha o la isquierda</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>COMO CAPTURA</td>
                        <td>la torre ataca asia la isquierda o dercha y recto</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TRUCO</td>
                        <td>la torre baila con el rey cuando ninguno de los dos se a movido</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TRUCO</td>
                        <td>la torre en el idioma ajresizta se llama T</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>ESTRATEGIA</td>
                        <td>La estrategia de conectar las dos torres en la misma fila o columna puede 
                            ser poderosa, ya que permite un mayor control del tablero y puede conducir 
                            a ataques más fuertes.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>ESTRATEGIA</td>
                        <td>La torre es esencial para controlar columnas y filas del tablero. Suele ser especialmente útil en el 
                            final del juego, cuando el tablero se ha abierto y las posibilidades de movimiento son más amplias.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>COMO ES LA TORRE</td>
                        <td>En resumen, la torre es una pieza clave en el ajedrez, 
                            tanto para la defensa como para el ataque, y su manejo efectivo puede ser 
                            crucial para el éxito en el juego.
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        
@stop

@section('content')
    <table class="table table-bordared table-striped table-hover"
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop