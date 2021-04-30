@extends('adminlte::page')

@section('title', 'Portos')

@section('content_header')
<h1>Portos</h1>
@stop

@section('content')

<div class="row">
      <div class="col-12">
            <div class="card">
                  <div class="card-header">
                        <h3 class="card-title">Todos os portos</h3>
                        
                              <button data-toggle="modal" data-target="#exampleModal" class="btn btn-dark ml-2"><i class="fas fa-plus"></i> Add novo Porto</button>
                   
                        <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                          placeholder="Search">

                                    <div class="input-group-append">
                                          <button type="submit" class="btn btn-default"><i
                                                      class="fas fa-search"></i></button>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed">
                              <thead>
                                    <tr>
                                          <th>ID</th>
                                          <th>Nome</th>
                                          <th>Localização</th>
                                          <th>Status</th>
                                          <th>Ação</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          <td>1</td>
                                          <td>Matosinhos</td>
                                          <td>Norte</td>
                                          <td><span class="tag tag-success">Ativo</span></td>
                                          <td>
                                          </td>
                                    </tr>


                              </tbody>
                        </table>
                  </div>
                  <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Porto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        ...
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-dark">Salvar</button>
                  </div>
            </div>
      </div>
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