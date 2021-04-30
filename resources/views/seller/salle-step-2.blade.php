@extends('layouts.app')

@section('content')
<div class="container-center-horizontal">
      <div class="seller-panel-sale-step-2 screen">
            <a href="javascript:history.back()">
                  <div class="background-header-small-C61RwL">
                        <div class="voltar-BZ67jr"><img class="voltar-svg-QgZt8l"
                                    src="{{ url('assets/img/voltar-svg@2x.svg') }}" /></div>
                        <div class="voltar-i13121148131-BZ67jr poppins-extra-bold-voodoo-20px">Voltar</div>
                  </div>
            </a>
            <div class="detalhes-da-venda-C61RwL poppins-extra-bold-voodoo-20px">Detalhes da venda</div>
            <div class="overlap-group-C61RwL">
                  <div class="rectangle-7-4eduM0"></div>
                  <div class="rectangle-1-4eduM0"></div>
                  <div class="rectangle-3-4eduM0"></div>
                  <div class="rectangle-2-4eduM0"></div>
                  <div class="matosinhos-4eduM0 poppins-extra-bold-voodoo-20px">@if($product['porto'] == 1) Porto 1
                        @elseif($product['porto'] == 2)
                        Porto 2 @elseif($product['porto'] == 3) Porto 3 @endif</div>
                  <div class="valor-min-lota-4eduM0 poppins-bold-voodoo-15-7px">Valor Min. <br />Lota</div>
                  <div class="valor-md-lota-4eduM0 poppins-bold-voodoo-15-7px">Valor Méd. Lota</div>
                  <div class="valor-mx-lota-4eduM0 poppins-bold-voodoo-15-7px">Valor Máx. <br />Lota</div>
                  <div class="x283-4eduM0">€ 2,83</div>
                  <div class="x183-4eduM0">€ 1,83</div>
                  <div class="x350-4eduM0">€ 3,50</div>
                  <a href="javascript:history.back()">
                        <div class="btn-generic-4eduM0">
                              <div class="text-btn-generic-i1484226-GfAHNY poppins-bold-white-18px">Alterar</div>
                        </div>
                  </a>
                  <div class="line-gray-4eduM0"><img class="line-gray-yNHlVK"
                              src="{{ url('assets/img/line-gray@2x.svg') }}" /></div>
            </div>
            <form action="{{ url('seller-step-two-post') }}" method="POST">

                  @csrf
                  <div class="group-1-C61RwL">
                        <div class="imput-dropdown-100-VyzZeT">
                              <div class="imput-dropdown-100-zdcXR9">
                                    <div class="imput-dropdown-100-FfisVa border-2px-cloud"></div>

                                    <select class="imput-dropdown-100-i1134911327-FfisVa poppins-normal-manatee-18px"
                                          name="especie" id="">
                                          <option value="1">Carapau</option>
                                          <option value="2">Tilapia</option>
                                          <option value="3">Cascudo</option>
                                    </select>
                              </div>
                        </div>
                        <div class="flex-row-VyzZeT">
                              <div class="imput-dropdown-50-SxxATt">
                                    <div class="imput-dropdown-50-ypvSpm">
                                          <div
                                                class="imput-dropdown-50-KTw77A border-2px-cloud {{ $errors->has('qty') ? ' border-error' : '' }}">
                                          </div>

                                          <select
                                                class="imput-dropdown-50-i1136111309-KTw77A poppins-normal-manatee-18px "
                                                name="qty" id="">
                                                <option value="">Qtd.</option>
                                                <option value="1">10 kg</option>
                                                <option value="2">50 kg</option>
                                                <option value="3">100 kg</option>
                                          </select>
                                    </div>
                              </div>
                              <div class="imput-dropdown-50-kY3o9z">
                                    <div class="imput-dropdown-50-YQaWJm">
                                          <div
                                                class="imput-dropdown-50-v1nxW5 border-2px-cloud {{ $errors->has('unity') ? ' border-error' : '' }}">
                                          </div>

                                          <select
                                                class="imput-dropdown-50-i1136711309-v1nxW5 poppins-normal-manatee-18px"
                                                name="unity" id="">
                                                <option value="">Unid.</option>
                                                <option value="1">10</option>
                                                <option value="2">50</option>
                                                <option value="3">100</option>
                                          </select>
                                    </div>
                              </div>
                        </div>
                        <div class="flex-row-ri4jeA">
                              <div class="imput-dropdown-50-WyERLE">
                                    <div class="imput-dropdown-50-M21geM">
                                          <div
                                                class="imput-dropdown-50-XdYlS2 border-2px-cloud {{ $errors->has('size') ? ' border-error' : '' }}">
                                          </div>
                                          <select
                                                class="imput-dropdown-50-i1137311309-XdYlS2 poppins-normal-manatee-18px"
                                                name="size" id="">
                                                <option value="">Tam.</option>
                                                <option value="1">T1</option>
                                                <option value="2">T2</option>
                                                <option value="3">T3</option>
                                                <option value="4">T3</option>
                                          </select>
                                    </div>
                              </div>
                              <div class="imput-dropdown-50-GYmRJl">
                                    <div class="imput-dropdown-50-fzRxBf">
                                          <div
                                                class="imput-dropdown-50-UMSVgd border-2px-cloud {{ $errors->has('art') ? ' border-error' : '' }}">
                                          </div>

                                          <select
                                                class="imput-dropdown-50-i1137411309-UMSVgd poppins-normal-manatee-18px"
                                                name="art" id="">
                                                <option value="">Arte</option>
                                                <option value="1">Rede</option>
                                                <option value="2">Vara</option>
                                                >
                                          </select>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="flex-row-C61RwL">
                        <div class="seu-preo-dXBp89">Seu preço</div>
                        <div class="vai-receber-dXBp89">Vai receber</div>
                  </div>
                  <div class="flex-row-VMr6Om">
                        <div
                              class="imput-100-BdpSxK border-2px-cloud {{ $errors->has('price') ? ' border-error' : '' }}">
                              <input class="imput-100-i1391111253-YEGizG poppins-normal-manatee-18px" name="price"
                                    placeholder="€ 000,00" type="text" id="price" onkeyup="getPriceValue()" required />
                        </div>
                        <div class="overlap-group1-BdpSxK">
                              <div class="rectangle-5-q9xEPe"></div>
                              <input class="x00000-q9xEPe" placeholder="€ 000,00" id="percent" type="text" />
                        </div>
                  </div>
                  <div class="btn-generic-C61RwL">
                        <button type="submit" class="text-btn-generic-i11113226-Sts0rK poppins-bold-white-18px">Gravar
                              Registo</button>
                  </div>
                  <div class="btnred-C61RwL">
                        <div class="btnred-i11396230-26vGhP poppins-bold-white-18px">Cancelar</div>
                  </div>
            </form>
      </div>
</div>


<script>
      function getPriceValue()
      {
var input1 = $("#price").val();
var valor = 0;
         var value =  input1 - input1 * (40/100);
         var input2 = $("#percent").val(value);
      }
      
</script>
@endsection