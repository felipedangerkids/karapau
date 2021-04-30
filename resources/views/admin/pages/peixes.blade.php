@extends('adminlte::page')

@section('title', 'Peixes')

@section('content_header')
<h1>Peixes</h1>
@stop

@section('content')
<div class="row">
      <div class="col-12">
            <div class="card">
                  <div class="card-header">
                        <h3 class="card-title">Todos os portos</h3>

                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-dark ml-2"><i
                                    class="fas fa-plus"></i> Add novo Peixe</button>

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
                                          <th>Espécie</th>
                                          <th>Status</th>
                                          <th style="width: 250px">Ação</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    @foreach ($peixes as $peixe)
                                    <tr>
                                          <td>{{ $peixe->id }}</td>
                                          <td>{{ $peixe->nome }}</td>
                                          <td>{{ $peixe->especie }}</td>
                                          <td><span class="tag tag-success">Ativo</span></td>
                                          <td>
                                                <a href="{{ url('admin/cadastros/portos/delete/'. $peixe->id) }}">
                                                      <button
                                                            onclick="return confirm('Você tem certeza que gostaria de deletar este peixe?');"
                                                            class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                                            Apagar</button></a>
                                                <button class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i>
                                                      Editar</button>
                                          </td>
                                    </tr>
                                    @endforeach


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
                        <div class="card card-primary">

                              <!-- /.card-header -->
                              <!-- form start -->
                              <form role="form" method="POST" action="{{ url('admin/cadastros/peixe/store') }}">
                                    <div class="card-body">
                                          @csrf
                                          <div class="form-group">
                                                <label for="exampleInputEmail1">Nome do Peixe</label>
                                                <input type="text" name="nome" class="form-control"
                                                      id="exampleInputEmail1" placeholder="Coloque o nome do Peixe">
                                          </div>
                                          <div class="form-group">
                                                <label for="exampleInputEmail1">Especie</label>
                                                <input type="text" name="especie" class="form-control"
                                                      id="exampleInputEmail1"
                                                      placeholder="Coloque a espécie do peixe">
                                          </div>
                                          <div class="form-group">
                                                <label for="exampleInputEmail1">Nome Cientifico</label>
                                                <input type="text" name="nome_cientifico" class="form-control"
                                                      id="exampleInputEmail1"
                                                      placeholder="Coloco o nome cientifico do peixe">
                                          </div>
                                          <div class="form-group">
                                                <label for="exampleInputEmail1">Código FAO</label>
                                                <input type="text" name="codigo_fao" class="form-control"
                                                      id="exampleInputEmail1"
                                                      placeholder="Coloco o código fao">
                                          </div>
                                          <div class="form-group">
                                                <label for="exampleInputEmail1">Código LOTA</label>
                                                <input type="text" name="codigo_lota" class="form-control"
                                                      id="exampleInputEmail1"
                                                      placeholder="Coloque o código lota">
                                          </div>

                                          <div class="form-group">
                                                <label for="exampleInputFile">Foto do Peixe</label>
                                                <div class="input-group">
                                                      <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                  id="exampleInputFile">
                                                            <label class="custom-file-label"
                                                                  for="exampleInputFile">Escolher Arquivo</label>
                                                      </div>
                                                      <div class="input-group-append">
                                                            <span class="input-group-text" id="">Upload</span>
                                                      </div>
                                                </div>
                                          </div>

                                    </div>
                                    <!-- /.card-body -->

                        </div>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-dark">Salvar</button>
                  </div>
                  </form>
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