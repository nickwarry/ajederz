@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Caballo</h1>
@stop

@section('content')
    <div class="row">
        <div class=col-6>
             <table class="table table-bordered table stiped table-hover">
                 <thead>
                     <th>No</th>
                     <th>item</th>
                     <th>descripcion</th>
                     <th>GRAFICO</th>
                 </thead>
                 <tbody>
                     <tr>
                        <td>1</td>
                        <td>movimiento</td>
                        <th>el caballo va en L para adelante o atras</th>
                        <th></th>
                     </tr>
                     <tr>
                        <td>2</td>
                        <td>como captura</td>
                        <td>el cabllo captura en L
                        <td></td>
                     </tr>
                     <tr>
                        <td>3</td>
                        <td>trucos</td>
                        <td>La horquilla: Ataca dos piezas 
                            simultáneamente, forzando al oponente a perder material.</td>
                        <td></td>
                     </tr>
                     <tr>
                        <td>4</td>
                        <td>curiusidades</td>
                        <td>El caballo es la única pieza que puede saltar sobre otras piezas: 
                            A diferencia de todas las demás piezas en el tablero, el caballo es la 
                            única que puede saltar sobre otras piezas en su movimiento.</td>
                        <td></td> 
                     </tr>
                     <tr>
                        <td>5</td>
                        <td>como nacio</td>
                        <td>El ajedrez y la figura del caballo se originaron 
                            en la India alrededor del siglo VI d.C. Se cree que el caballo 
                            evolucionó gradualmente como una de las piezas principales del juego 
                            a medida que este se extendía por diferentes culturas. El movimiento del caballo 
                            en forma de "L" ha permanecido constante a lo largo de la historia del ajedrez. Sin embargo, no hay 
                            un evento o momento específico que marque su origen definitivo.</th>



      

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop