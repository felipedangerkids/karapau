@extends('layouts.app')

@section('content')

<div class="header-login">
      <div class="d-flex container py-5 justify-content-center header-reg align-items-center">
            <div class="mr-4 my-auto">
                  <a href="javascript:history.back()"><i class="fas fa-chevron-left"></i></a>
            </div>
            <div>
                  <h3>Registro de Comprador Coletivo</h3>
            </div>
      </div>
</div>
<div>
      <div class="container">
            <div class="mt-5 form-login">
                  <form action="{{ route('buyer.register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                              <div>
                                    <div class="photo mx-auto">
                                          <input type="file" name='pic'>
                                          <div class="photo-img">
                                                <img src="{{ url('assets/img/foto.svg') }}" class="img">
                                          </div>

                                    </div>

                              </div>
                              <div class="pic-up">
                                    <p class="text-center">Adcionar Foto</p>
                              </div>
                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nickname</label>
                              <input type="text" class="form-control" name="nickname" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nome</label>
                              <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
                              <input type="text" class="form-control" name="lastname" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input type="text" class="form-control" name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Senha</label>
                              <input type="password" class="form-control" name="password" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Confirmar Senha</label>
                              <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Telefone</label>
                              <input type="text" class="form-control" name="telefone" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Telefone 2</label>
                              <input type="text" class="form-control" name="telefone2" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tipo de negócio</label>
                              <input type="text" class="form-control" name="morada" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Morada</label>
                              <input type="text" class="form-control" name="morada" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Localidade</label>
                              <input type="text" class="form-control" name="localidade" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Código Postal</label>
                              <input type="text" class="form-control" name="cep" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">NIF</label>
                              <input type="text" class="form-control" name="nif" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Porto / Local da Entrega</label>
                              <input type="text" class="form-control" name="porto" id="exampleInputPassword1">
                        </div>

                        <div class="container my-4">
                              <button type="submit" class="btn btn-primary login">Registrar</button>
                        </div>
                  </form>
            </div>
      </div>
</div>

@endsection