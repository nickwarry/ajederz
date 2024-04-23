@extends('adminlte::page')

@section('title', 'dashboerd')

@section('content_header')
    <h1>Piezas principales</h1>
@stop

@section('content')
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa-regular fa-chess-pawn fa-beat-fade"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Peón</span>
                <span class="info-box-number">10. Bs</span>
                <button class="btn btn-success" >comprar</button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa-regular fa-chess-knight fa-beat-fade"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">caballo</span>
                <span class="info-box-number">30. Bs</span>
                <button class="btn btn-success" >comprar</button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa-regular fa-chess-bishop fa-beat-fade"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">alfil</span>
                <span class="info-box-number">30. Bs</span>
                <button class="btn btn-success" >comprar</button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa-regular fa-chess-rook fa-beat-fade"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">torre</span>
                <span class="info-box-number">50. Bs</span>
                <button class="btn btn-success" >comprar</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa-regular fa-chess-rook fa-beat-fade"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">reyna</span>
                <span class="info-box-number">90. Bs</span>
                <button class="btn btn-success" >comprar</button>
              </div>
            </div>
          </div>
        </div>
@stop
<i class="fa-regular fa-chess-knight"></i>
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop