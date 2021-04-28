@extends('layouts.app')

@section('content')
<input type="hidden" id="anPageName" name="page" value="authentication-register-seller" />
<div class="container-center-horizontal">
      <div class="authentication-register-seller screen">
            <a href="javascript:history.back()">
                  <div class="background-header-small-C61RwL">
                        <div class="voltar-BZ67jr"><img class="voltar-svg-QgZt8l"
                                    src="{{ url('assets/img/voltar-svg@2x.svg') }}" /></div>
                        <div class="voltar-i119524148131-BZ67jr">Voltar</div>
                  </div>
            </a>
            <div class="registo-de-vendedor-C61RwL">Registo de Vendedor</div>
            <div class="imput-100-C61RwL border-2px-cloud">
                  <input class="imput-100-i4774411253-ETfRnS poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Nome" type="text" required />
            </div>
            <div class="imput-100-VMr6Om border-2px-cloud">
                  <input class="imput-100-i4776011253-UppLul poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Sobrenome" type="text" required />
            </div>
            <div class="imput-100-mzXdH9 border-2px-cloud">
                  <input class="imput-100-i4776311253-hrdCAf poppins-normal-manatee-18px" name="imput-100"
                        placeholder="E-mail" type="email" required />
            </div>
            <div class="imput-100-QxM5SU border-2px-cloud">
                  <input class="imput-100-i4776611253-cOFO29 poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Senha" type="password" required />
            </div>
            <div class="imput-100-2P4qUJ border-2px-cloud">
                  <input class="imput-100-i4776911253-O7pYL7 poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Confirmar senha" type="password" required />
            </div>
            <div class="imput-100-qr8e7q border-2px-cloud">
                  <input class="imput-100-i4777211253-qy5OlV poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Telemóvel" type="text" required />
            </div>
            <div class="imput-100-J1YQmd border-2px-cloud">
                  <input class="imput-100-i4777511253-aZO6Rj poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Morada" type="text" required />
            </div>
            <div class="flex-row-C61RwL">
                  <div class="imput-50-dXBp89">
                        <div class="imput-50-xQrLAp">
                              <div class="imput-50-oyqzX8 border-2px-cloud"></div>
                              <input class="imput-50-i4786711255-oyqzX8 poppins-normal-manatee-18px" name="imput-50"
                                    placeholder="NIF" type="text" required />
                        </div>
                  </div>
                  <div class="imput-50-Xi618D">
                        <div class="imput-50-AqYWVV">
                              <div class="imput-50-UnbuJE border-2px-cloud"></div>
                              <input class="imput-50-i4787111255-UnbuJE poppins-normal-manatee-18px" name="imput-50"
                                    placeholder="IBAN" type="text" required />
                        </div>
                  </div>
            </div>
            <div class="imput-dropdown-100-C61RwL">
                  <div class="imput-dropdown-100-PF8xVf">
                        <div class="imput-dropdown-100-xcwlBC border-2px-cloud"></div>
                        <input class="imput-dropdown-100-i4787511327-xcwlBC poppins-normal-manatee-18px"
                              name="imput-dropdown-100" placeholder="Porto de registo" type="text" required />
                        <div class="imput-dropdown-100-uSaiy1">
                              <img class="imput-dropdown-100-0xY2k0" src="img/imput-dropdown-100@2x.svg" />
                        </div>
                  </div>
            </div>
            <div class="imput-100-a5WPlX border-2px-cloud">
                  <input class="imput-100-i4788111253-gxxi7y poppins-normal-manatee-18px" name="imput-100"
                        placeholder="Zona de Pesca" type="text" required />
            </div>
            <div class="btn-generic-C61RwL">
                  <div class="text-btn-generic-i47740226-Sts0rK">Registar</div>
            </div>
            <div class="flex-row-VMr6Om">
                  <input class="type-checkbox-BdpSxK border-2px-cloud" name="119448" placeholder="type-checkbox"
                        type="checkbox" required />
                  <div class="aceito-os-termos-e-condies-BdpSxK">
                        <span class="span0-ekT6x6">Aceito os </span><span class="span1-ekT6x6">termos e condições</span>
                  </div>
            </div>
      </div>
</div>

@endsection