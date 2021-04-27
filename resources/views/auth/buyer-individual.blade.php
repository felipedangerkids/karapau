@extends('layouts.app')

@section('content')
<input type="hidden" id="anPageName" name="page" value="authentication-register-individual-buyer" />
<div class="container-center-horizontal">
      <div class="authentication-register-individual-buyer screen">
            <a href="javascript:history.back()">
                  <div class="background-header-small-C61RwL">
                        <div class="voltar-BZ67jr"><img class="voltar-svg-QgZt8l" src="{{ url('assets/img/voltar-svg@2x.svg') }}" /></div>
                        <div class="voltar-i119528148131-BZ67jr">Voltar</div>
                  </div>
            </a>
            <div class="registo-de-comp-ador-individual-C61RwL">Registo de comprador individual</div>
            <div class="imput-100-C61RwL border-2px-cloud">
                  <input class="imput-100-i4784111253-ETfRnS poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Nome" type="text" required />
            </div>
            <div class="imput-100-VMr6Om border-2px-cloud">
                  <input class="imput-100-i4784211253-UppLul poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Sobrenome" type="text" required />
            </div>
            <div class="imput-100-mzXdH9 border-2px-cloud">
                  <input class="imput-100-i4784311253-hrdCAf poppins-normal-manatee-18px" name="imput-100"
                        placeholder="E-mail" type="email" required />
            </div>
            <div class="imput-100-QxM5SU border-2px-cloud">
                  <input class="imput-100-i4784411253-cOFO29 poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Senha" type="password" required />
            </div>
            <div class="imput-100-2P4qUJ border-2px-cloud">
                  <input class="imput-100-i4784511253-O7pYL7 poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Confirmar senha" type="password" required />
            </div>
            <div class="imput-100-qr8e7q border-2px-cloud">
                  <input class="imput-100-i4784611253-qy5OlV poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Telemóvel" type="text" required />
            </div>
            <div class="imput-100-J1YQmd border-2px-cloud">
                  <input class="imput-100-i4784711253-aZO6Rj poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Morada" type="text" required />
            </div>
            <div class="btn-generic-C61RwL">
                  <div class="text-btn-generic-i47839226-Sts0rK">Registar</div>
            </div>
            <div class="flex-row-C61RwL">
                  <input class="type-checkbox-dXBp89 border-2px-cloud" name="119503" placeholder="type-checkbox"
                        type="checkbox" required />
                  <div class="aceito-os-termos-e-condies-dXBp89">
                        <span class="span0-i1HkJL">Aceito os </span><span class="span1-i1HkJL">termos e condições</span>
                  </div>
            </div>
      </div>
</div>

@endsection