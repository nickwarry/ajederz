@extends('adminlte::page')
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrapshap.min.css')}}"> --}}
@stop
@section('title', 'Dashboard')

@section('content_header')
    <h1>TABLERO</h1>
@stop

@section('content')
<div class="container">
    <div class="col text-center">
        <div class="card">
            <div class="card-head">
                TABLERO DE AJEDREZ
            </div>
            <div class="card-body">
                <canvas id="chessboard" width="500" height="500"></canvas>
            </div>
        </div>

    </div>
</div>

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
    lapiz.fillText("F",265 , 430);
    lapiz.fillText("G",315 , 430);
    lapiz.fillText("H",365 , 430);






    lapiz.fillstyle= '#000000';
    lapiz.font="20px arial";
    lapiz.fillText("A1",15, 35);
    lapiz.fillText("B1",65, 35);
    lapiz.fillText("C1",115, 35);
    lapiz.fillText("D1",165, 35);
    lapiz.fillText("E1",215, 35);
    lapiz.fillText("F1",265, 35);
    lapiz.fillText("G1",315, 35);
    lapiz.fillText("H1",365, 35);

    lapiz.fillText("A2",15, 85);
    lapiz.fillText("B2",65, 85);
    lapiz.fillText("C2",115, 85);
    lapiz.fillText("D2",165, 85);
    lapiz.fillText("E2",215, 85);
    lapiz.fillText("F2",265, 85);
    lapiz.fillText("G2",315, 85);
    lapiz.fillText("H2",365, 85);

    lapiz.fillText("A3",15, 135);
    lapiz.fillText("B3",65, 135);
    lapiz.fillText("C3",115, 135);
    lapiz.fillText("D3",165, 135);
    lapiz.fillText("E3",215, 135);
    lapiz.fillText("F3",265, 135);
    lapiz.fillText("G3",315, 135);
    lapiz.fillText("H3",365, 135);

    lapiz.fillText("A4",15, 185);
    lapiz.fillText("B4",65, 185);
    lapiz.fillText("C4",115, 185);
    lapiz.fillText("D4",165, 185);
    lapiz.fillText("E4",215, 185);
    lapiz.fillText("F4",265, 185);
    lapiz.fillText("G4",315, 185);
    lapiz.fillText("H4",365, 185);

    lapiz.fillText("A5",15, 235);
    lapiz.fillText("B5",65, 235);
    lapiz.fillText("C5",115, 235);
    lapiz.fillText("D5",165, 235);
    lapiz.fillText("E5",215, 235);
    lapiz.fillText("F5",265, 235);
    lapiz.fillText("G5",315, 235);
    lapiz.fillText("H5",365, 235);

    lapiz.fillText("A6",15, 285);
    lapiz.fillText("B6",65, 285);
    lapiz.fillText("C6",115, 285);
    lapiz.fillText("D6",165, 285);
    lapiz.fillText("E6",215, 285);
    lapiz.fillText("F6",265, 285);
    lapiz.fillText("G6",315, 285);
    lapiz.fillText("H6",365, 285);

    lapiz.fillText("A7",15, 335);
    lapiz.fillText("B7",65, 335);
    lapiz.fillText("C7",115, 335);
    lapiz.fillText("D7",165, 335);
    lapiz.fillText("E7",215, 335);
    lapiz.fillText("F7",265, 335);
    lapiz.fillText("G7",315, 335);
    lapiz.fillText("H7",365, 335);

    lapiz.fillText("A8",15, 385);
    lapiz.fillText("B8",65, 385);
    lapiz.fillText("C8",115, 385);
    lapiz.fillText("D8",165, 385);
    lapiz.fillText("E8",215, 385);
    lapiz.fillText("F8",265, 385);
    lapiz.fillText("G8",315, 385);
    lapiz.fillText("H8",365, 385)
    lapiz.strokeRect(0, 0, canvas.width, canvas.height);
</script>

route::get("mitablero",fuction(){
    return view("tablero.tablero");
})
@stop