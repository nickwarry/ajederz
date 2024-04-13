@extends('adminlte::page')
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<canvas id="chessboard" width="500" height="500"></canvas>

@stop



@section('js')
<script>
    var canvas = document.getElementById('chessboard');
    var lapiz = canvas.getContext('2d');
    var tileSize = 400 / 8;
    for (var i = 0; i < 8; i++){
        for (var j = 0; j < 8; j++) {
            if ((i + j) % 2 === 0) {
                lapiz.fillStyle = '#ffffff'
            } else {
                lapiz.fillStyle = '#26baa5'
            }
            lapiz.fillRect(i * tileSize, j * tileSize, tileSize,tileSize);
        }
    }
    lapiz.fillStyle= '#000000';
    lapiz.font="30px arial";
    lapiz.fillText("1",410 , 35);
    lapiz.fillText("2",410 , 85);
    lapiz.fillText("3",410 , 135);
    lapiz.fillText("4",410 , 185);
    lapiz.fillText("5",410 , 235);
    lapiz.fillText("6",410 , 285);
    lapiz.fillText("7",410 , 335);
    lapiz.fillText("8",410 , 385);

    lapiz.fillText("A",15 , 430);
    lapiz.fillText("B",65 , 430);
    lapiz.fillText("C",115 , 430);
    lapiz.fillText("D",165 , 430);
    lapiz.fillText("E",215 , 430);
    lapiz.fillText("E",265 , 430);


    lapiz.strokeRect(0, 0, canvas.width, canvas.height);
</script>

route::get("mitablero",fuction(){
    return view("tablero.tablero");
})
@stop