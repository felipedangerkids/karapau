@extends('layouts.app')

@section('content')

<input type="hidden" id="anPageName" name="page" value="seller-panel-dashboard" />
<div class="container-center-horizontal">
      <div class="seller-panel-dashboard screen">
            <div class="flex-col-C61RwL">
                  <div class="overlap-group-0xy0vn">
                        <div class="header-top-y1HRxC">
                              <div class="header-top-QEP1KW">
                                    <div class="header-top-E1CjAw">
                                          <img class="header-top-e7Y63y"
                                                src="{{ url('assets/img/header-top-3@2x.svg') }}" />
                                          <img class="header-top-pWfEUz"
                                                src="{{ url('assets/img/header-top@2x.svg') }}" />
                                          <div class="overlap-group1-e7Y63y">
                                                <img class="header-top-3WOilC"
                                                      src="{{ url('assets/img/header-top-1@2x.svg') }}" />
                                                <img class="header-top-58lGHL"
                                                      src="{{ url('assets/img/header-top-2@2x.svg') }}" />
                                          </div>
                                    </div>
                              </div>
                              <img class="vector-QEP1KW" src="{{ url('assets/img/vector@2x.svg') }}" />
                        </div>
                        <div class="id-7896-y1HRxC poppins-extra-bold-voodoo-20px">ID {{ Auth::user()->id }}</div>
                        <div class="edit-off-y1HRxC"></div>
                        <div class="icone-notificacoes-y1HRxC">
                              <img class="icone-notificacoes-Jvl6wW"
                                    src="{{ url('assets/img/icone-notificacoes@2x.svg') }}" />
                        </div>
                        <div class="btn-status-y1HRxC">
                              <div class="btn-status-YqGQFE">
                                    <div class="x10-i1274196219236-xGHda1">0</div>
                              </div>
                        </div>
                  </div>
                  <div class="line-gray-0xy0vn"><img class="line-gray-CTEP0h"
                              src="{{ url('assets/img/line-gray@2x.svg') }}" /></div>
                  <div class="ol-emanuel-bettencourt-0xy0vn poppins-extra-bold-voodoo-20px">Olá,
                        {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                  </div>
                  <div class="line-gray-oV5UrE"><img class="line-gray-HmGor3"
                              src="{{ url('assets/img/line-gray@2x.svg') }}" /></div>
                  <div class="flex-row-0xy0vn">
                        <a href="{{ url('seller-step-one') }}">
                              <div class="group-18214-GyJUNH">
                                    <div class="btnsquare-RNjGA6">
                                          <div class="btnsquare-2dQ3uj"></div>
                                          <div class="btnsquare-i47149232-2dQ3uj poppins-bold-voodoo-18px">Vender</div>
                                    </div>
                                    <div class="plus-off-RNjGA6"></div>
                              </div>
                        </a>
                        <div class="overlap-group1-GyJUNH">
                              <div class="group-18213-v6Glvx">
                                    <div class="btnsquare-zqxvsC">
                                          <div class="btnsquare-mEWtsK"></div>
                                          <div class="btnsquare-i47152232-mEWtsK poppins-bold-voodoo-18px">Pedidos</div>
                                    </div>
                                    <div class="euro-off-zqxvsC"></div>
                              </div>
                              <div class="btn-status-v6Glvx">
                                    <div class="btn-status-0yvhxf">
                                          <div class="x10-i471586219236-LmntFh">0</div>
                                    </div>
                              </div>
                        </div>
                        <div class="group-18212-GyJUNH">
                              <div class="btnsquare-xE2oaE">
                                    <div class="btnsquare-GDJ2Vd"></div>
                                    <div class="btnsquare-i47155232-GDJ2Vd poppins-bold-voodoo-18px">Convidar</div>
                              </div>
                              <div class="share-off-xE2oaE"></div>
                        </div>
                  </div>
                  <div class="btn-generic-0xy0vn">
                        <div class="text-btn-generic-i47157226-Chx0yi">MEUS GANHOS</div>
                  </div>
                  <div class="peixes-a-venda-na-plataforma-0xy0vn">Peixes a venda na plataforma</div>
                  <div class="line-gray-4iD7zR"><img class="line-gray-2NarAi"
                              src="{{ url('assets/img/line-gray@2x.svg') }}" /></div>
            </div>
            <div class="flex-row-C61RwL">
                  <div class="espcie-dXBp89 poppins-extra-bold-voodoo-20px">Espécie</div>
                  <div class="kg-dXBp89 poppins-extra-bold-voodoo-20px">Kg</div>
                  <div class="preo-dXBp89 poppins-extra-bold-voodoo-20px">Preço</div>
                  <div class="tempo-dXBp89 poppins-extra-bold-voodoo-20px">Tempo</div>
            </div>
            <div class="flex-col-VMr6Om">
                  <div class="flex-col-lcFreP">
                        <div class="flex-col-APIgQa">
                              <div class="line-gray-mu6cJe"><img class="line-gray-slSzAn"
                                          src="{{ url('assets/img/line-gray@2x.svg') }}" />
                              </div>
                              <div class="flex-row-mu6cJe">
                                    <div class="carapau-t2a-O8Us0i poppins-normal-voodoo-15px">CARAPAU<br />T2/A</div>
                                    <div class="x1000-O8Us0i poppins-normal-voodoo-15px">10,00</div>
                                    <div class="x270-O8Us0i poppins-normal-voodoo-15px">€ 2,70</div>
                                    <div class="flex-col-O8Us0i">
                                          <div class="timer-kIml3S"></div>
                                          <div class="x240000-kIml3S poppins-normal-red-15px">24:00:00</div>
                                    </div>
                              </div>
                              <div class="line-gray-F49W2z"><img class="line-gray-dXQevO"
                                          src="{{ url('assets/img/line-gray@2x.svg') }}" />
                              </div>
                        </div>

                  </div>

            </div>
      </div>
</div>

@endsection