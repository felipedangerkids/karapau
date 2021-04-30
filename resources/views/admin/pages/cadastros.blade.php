@extends('adminlte::page')

@section('title', 'Cadastros')

@section('content_header')
<h1>Cadastros</h1>
@stop

@section('content')

<div class="row init-cad">
      <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="{{ url('admin/cadastros/portos') }}">
                  <div class="info-box">
                        <span class="info-box-icon bg-dark"><i class="fas fa-plus"></i></span>

                        <div class="info-box-content">
                              <span class="info-box-text">Cadastros de Portos</span>

                        </div>
                        <!-- /.info-box-content -->
                  </div>
            </a>
            <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                  <span class="info-box-icon bg-dark"><i class="fas fa-plus"></i></span>

                  <div class="info-box-content">
                        <span class="info-box-text">Cadastros de Peixes</span>

                  </div>
                  <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                  <span class="info-box-icon bg-dark"><i class="fas fa-plus"></i></span>

                  <div class="info-box-content">
                        <span class="info-box-text">Cadastros de Unidades</span>

                  </div>
                  <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                  <span class="info-box-icon bg-dark"><i class="fas fa-plus"></i></span>

                  <div class="info-box-content">
                        <span class="info-box-text">Cadastros de Tamanhos</span>

                  </div>
                  <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
      </div>
      <!-- /.col -->
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
      console.log('Hi!'); 
</script>
@stop