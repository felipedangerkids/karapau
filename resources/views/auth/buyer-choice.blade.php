@extends('layouts.app')

@section('content')

<input type="hidden" id="anPageName" name="page" value="authentication-register-buyer-choice" />
<div class="container-center-horizontal">
      <div class="authentication-register-buyer-choice screen">
            <div class="overlap-group-C61RwL">
                  <div class="background-header-big-4eduM0"></div>
                  <div class="login-4eduM0">Login</div>
                  <div class="registo-4eduM0">Registo</div>
                  <div class="line-red-4eduM0"></div>
                  <div class="logo-4eduM0 container"><img class="mx-auto logo-img-9mfXOU" src="{{ url('assets/img/logo.svg') }}" /></div>
            </div>
            <div class="btn-generic-C61RwL">
                  <div class="text-btn-generic-i119481226-Sts0rK">Comprador individual</div>
            </div>
            <div class="btn-generic-VMr6Om">
                  <div class="text-btn-generic-i119482226-NLXNbA">Comprador coletivo</div>
            </div>
      </div>
</div>


@endsection