@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
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
                        <td>El rey se mueve una casilla en cualquier dirección, pero no 
                            puede moverse a una casilla amenazada por una pieza enemiga.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>como captura</td>
                        <td>El rey captura una pieza moviéndose a la casilla ocupada por esa pieza, 
                            pero no puede hacerlo si queda en peligro inmediato.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>trucos</td>
                        <td>Enroque: Mueve el rey dos casillas hacia una torre para protegerlo.
Escudo de peones: Coloca peones alrededor del rey para protegerlo.
Centralización segura: Mueve el rey hacia el centro en la fase final del juego.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>curiosidades</td>
                        <td>Pieza vital: Aunque valioso, el rey es débil y necesita protección constante.
Movimiento restringido: Solo puede moverse una casilla en cualquier dirección.
Vulnerabilidad al jaque: No puede moverse a una casilla amenazada</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>como nacio</td>
                        <td>El rey en el ajedrez nació como una representación 
                            del liderazgo y la autoridad en el campo de batalla durante 
                            la evolución del juego a lo largo de la historia. Se convirtió en la 
                            pieza más importante, simbolizando la necesidad de protección y liderazgo en el juego.</td>

 
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop