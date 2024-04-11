@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
        <div class="col-6">
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
                        <td>El alfil se mueve en diagonales a lo largo del tablero, 
                            avanzando cualquier cantidad de casillas en esa dirección siempre que estén despejadas.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>como captura</td>
                        <td>El alfil captura moviéndose diagonalmente hacia 
                            la casilla ocupada por una pieza enemiga.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>trucos</td>
                        <td>Truco del Alfil: "Diagonal siempre".</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>curiosidades</td>
                        <td>Origen del nombre: Viene del árabe "al-fīl", que significa "elefante".

Simetría del tablero: Los alfiles de cada jugador controlan casillas de un solo color.

Valor relativo: Aproximadamente 3 puntos cada uno.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>como nacio</td>
                        <td>
                            El juego del ajedrez se originó hace aproximadamente 1500 años en la India. El alfil solía ser 
                            representado por elefantes. Con el tiempo, el juego se difundió y adaptó a través de Persia hacia Europa, donde 
                            evolucionó hacia su forma moderna. El movimiento del alfil, diagonal a lo largo del tablero, se estableció durante este 
                            proceso y ha permanecido prácticamente sin cambios desde entonces.</td>

 
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