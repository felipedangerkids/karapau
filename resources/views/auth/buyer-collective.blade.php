@extends('layouts.app')

@section('content')
<input type="hidden" id="anPageName" name="page" value="authentication-register-collective-buyer" />
<div class="container-center-horizontal">
      <div class="authentication-register-collective-buyer screen">
            <div class="flex-col-C61RwL">
                  <a href="javascript:history.back()">
                        <div class="background-header-small-0xy0vn">
                              <div class="voltar-Ss3vOK"><img class="voltar-svg-rBQ6Rv"
                                          src="{{ url('assets/img/voltar-svg@2x.svg') }}" /></div>
                              <div class="voltar-i119531148131-Ss3vOK">Voltar</div>
                        </div>
                  </a>
                  <div class="registo-de-comprador-coletivo-0xy0vn">Registo de comprador coletivo</div>
                  <div class="imput-100-0xy0vn border-2px-cloud">
                        <input class="imput-100-i4778511253-dzsOr1 poppins-normal-manatee-18px" name="imput-100"
                              placeholder="Nome" type="text" required />
                  </div>
                  <div class="imput-100-oV5UrE border-2px-cloud">
                        <input class="imput-100-i4778611253-Y0ZHMT poppins-normal-manatee-18px" name="imput-100"
                              placeholder="Sobrenome" type="text" required />
                  </div>
                  <div class="imput-100-4iD7zR border-2px-cloud">
                        <input class="imput-100-i4778711253-z4Bdtm poppins-normal-manatee-18px" name="imput-100"
                              placeholder="E-mail" type="email" required />
                  </div>
                  <div class="imput-100-t6Autm border-2px-cloud">
                        <input class="imput-100-i4778811253-2oxN5c poppins-normal-manatee-18px" name="imput-100"
                              placeholder="Senha" type="password" required />
                  </div>
                  <div class="imput-100-uPORJx border-2px-cloud">
                        <input class="imput-100-i4778911253-xxQsMW poppins-normal-manatee-18px" name="imput-100"
                              placeholder="Confirmar senha" type="password" required />
                  </div>
                  <div class="imput-100-OtmKqf border-2px-cloud">
                        <input class="imput-100-i4779011253-0U0OJ3 poppins-normal-manatee-18px" name="imput-100"
                              placeholder="Telemóvel 1" type="email" required />
                  </div>
                  <div class="imput-100-0aLMTk border-2px-cloud">
                        <input class="imput-100-i4779111253-DUxANG poppins-normal-manatee-18px" name="imput-100"
                              placeholder="Telemóvel 2" type="text" required />
                  </div>
                  <div class="imput-100-exd5BQ border-2px-cloud">
                        <input class="imput-100-i4780911253-x1QmK3 poppins-normal-manatee-18px" name="imput-100"
                              placeholder="Morada" type="text" required />
                  </div>
                  <div class="imput-100-jmLuSL border-2px-cloud">
                        <input class="imput-100-i4781011253-lQZbp4 poppins-normal-manatee-18px" name="imput-100"
                              placeholder="NIF" type="text" required />
                  </div>
            </div>
            <div class="flex-row-C61RwL">
                  <div class="flex-col-dXBp89">
                        <input class="type-radio-0PZcXW" name="tipo" placeholder="type-radio" type="radio" required />
                        <input class="type-radio-gNHDIV" name="tipo" placeholder="type-radio" type="radio" required />
                        <input class="type-radio-GlNH56" name="tipo" placeholder="type-radio" type="radio" required />
                  </div>
                  <div class="flex-col-Xi618D">
                        <div class="peixaria-y0eQTV poppins-normal-voodoo-18px">Peixaria</div>
                        <div class="retalho-y0eQTV poppins-normal-voodoo-18px">Retalho</div>
                        <div class="varina-y0eQTV poppins-normal-voodoo-18px">Varina</div>
                  </div>
                  <div class="flex-col-ycScJA">
                        <input class="type-radio-9HOxau" name="tipo" placeholder="type-radio" type="radio" required />
                        <input class="type-radio-ZiuGWJ" name="tipo" placeholder="type-radio" type="radio" required />
                        <input class="type-radio-RIFvxp" name="tipo" placeholder="type-radio" type="radio" required />
                  </div>
                  <div class="flex-col-Ie9Mvc">
                        <div class="restaurao-YjijQ5 poppins-normal-voodoo-18px">Restauração</div>
                        <div class="hotelaria-YjijQ5 poppins-normal-voodoo-18px">Hotelaria</div>
                        <div class="outros-YjijQ5 poppins-normal-voodoo-18px">Outros</div>
                  </div>
            </div>
            <div class="btn-generic-C61RwL">
                  <div class="text-btn-generic-i47829226-Sts0rK">Registar</div>
            </div>
            <div class="flex-row-VMr6Om">
                  <input class="type-checkbox-BdpSxK border-2px-cloud" name="119506" placeholder="type-checkbox"
                        type="checkbox" required />
                  <div class="aceito-os-termos-e-condies-BdpSxK">
                        <span class="span0-ekT6x6 poppins-normal-voodoo-18px">Aceito os </span><span
                              class="span1-ekT6x6">termos e condições</span>
                  </div>
            </div>
      </div>
</div>


@endsection