@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>reina</h1>
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
                        <td>la reina o dama se mueve como 
                            la torre el rey y el alfil</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>como captura</td>
                        <td>la reina captura el rey el alfil y la torre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>trucos</td>
                        <td>Dominio del centro: Coloca la reina en el centro para ejercer presión en áreas clave del tablero.
Amenazas múltiples: Utiliza la reina para crear amenazas simultáneas a varias piezas o áreas.
Ataque al enroque: Dirige la reina hacia el enroque del oponente para iniciar un ataque.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>curiosidades</td>
                        <td>Evolución del poder: Antes era una pieza más débil; evolucionó en Europa en el siglo XV.
Nombre cambiante: Llamada "vizir" o "alfil"; luego "reina" por su poder.
Valor alto: Su valor teórico es 9 puntos, la más poderosa.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>como nacio</td>
                        <td>La reina evolucionó a lo largo de la historia del ajedrez. Inicialmente era una pieza menos 
                            poderosa llamada "vizir", que se movía de forma limitada. En Europa, durante el Renacimiento, adquirió 
                            su poder y movimientos actuales, convirtiéndose en la pieza más poderosa del juego.</td>

 
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