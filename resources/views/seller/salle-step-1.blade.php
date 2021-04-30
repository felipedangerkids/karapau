@extends('layouts.app')

@section('content')

<input type="hidden" id="anPageName" name="page" value="seller-panel-sale-step-1" />
<div class="container-center-horizontal">
      <div class="seller-panel-sale-step-1 screen">
            <a href="javascript:history.back()">
                  <div class="background-header-small-C61RwL">
                        <div class="voltar-BZ67jr"><img class="voltar-svg-QgZt8l"
                                    src="{{ url('assets/img/voltar-svg@2x.svg') }}" /></div>
                        <div class="voltar-i13119148131-BZ67jr">Voltar</div>
                  </div>
            </a>
            <div class="informe-os-dados-da-venda-C61RwL">Informe os dados da venda</div>
            <form action="{{ url('seller-step-one-post') }}" method="POST">
                  @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                  <div class="imput-dropdown-100-C61RwL">
                        <div class="imput-dropdown-100-PF8xVf">
                              <div class="imput-dropdown-100-xcwlBC border-2px-cloud"></div>
                              <select class="imput-dropdown-100-i1133111327-xcwlBC poppins-normal-manatee-18px"
                                    name="porto" id="">
                                    @foreach ($portos as $porto)
                                        <option value="{{ $porto->id }}">{{ $porto->name }}</option>
                                    @endforeach
                                   
                            
                              </select>
                        </div>
                  </div>
                  <div class="imput-dropdown-100-VMr6Om">
                        <div class="imput-dropdown-100-tCEvcJ">
                              <div class="imput-dropdown-100-KS9HNS border-2px-cloud"></div>
                              <select class="imput-dropdown-100-i1133111327-xcwlBC poppins-normal-manatee-18px"
                                    name="ship" id="">
                                    <option value="1">Embarcação 1</option>
                                    <option value="2">Embarcação 2</option>
                                    <option value="3">Embarcação 3</option>
                              </select>

                        </div>
                  </div>
                  <div class="imput-100-C61RwL border-2px-cloud">
                        <input class="imput-100-i1134311253-ETfRnS poppins-normal-manatee-18px" name="fishing_zone"
                              placeholder="Zona de Pesca" type="text" value="{{ $product->fishing_zone ?? '' }}"  required />
                  </div>
                  <div class="btn-generic-C61RwL">
                        <button type="submit" class="text-btn-generic-i11101226-Sts0rK">Registar uma venda</button>
                  </div>
            </form>
      </div>
</div>


@endsection