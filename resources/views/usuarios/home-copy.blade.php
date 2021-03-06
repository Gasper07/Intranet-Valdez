@extends('layouts.Template-home')

@section('content')
<div class="container continerWithSite">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 captionPosteos">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="col-md-12">
                  <div class="ui feed uifeedAvatar">
                    <div class="event">
                      <div class="label">
                        <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                      </div>
                      <div class="content">
                        <div class="summary">
                          <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                            Leonardo
                          </a>
                          <div class="date fontMiriamProRegular colorGrisMediumSuave">
                            1 Hour
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/bg-post.jpg" alt="post-user">
                  <div class="ui feed uifeedActions">
                    <div class="event">
                      <div class="label">
                        <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                      </div>
                      <div class="content contLike">
                        <div class="summary">
                          <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                            45 Valdecitos
                          </a>
                          <div class="date datePint fontMiriamProRegular colorGrisMediumSuave">
                            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/pines-ico.png">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ui feed uifeedComnetUser">
                    <div class="event">
                      <div class="label">
                        <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                      </div>
                      <div class="content">
                        <div class="summary">
                          <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                            Leonardo
                          </a>
                          <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                            Awww que bonito
                          </div>                           
                        </div>
                      </div>
                    </div>
                  </div>
                  <form class="ui form formComentUser">
                    <div class="field">
                      <input type="text" name="first-name" placeholder="Comentario">
                    </div>
                    {{-- <button class="ui button" type="submit">Submit</button> --}}
                  </form>
              </div>

              {{-- 2BLOQUE VACIONES --}}

             <div class="col-md-12 typeEventEspecial">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-vacaciones.jpg">
                <h4 class="fontCovered">¡Felices vacaciones!</h4>
                <h5 class="fontMiriamProRegular">Te desea Valdez Mobile</h5>
                <div class="ui feed uifeedActions">
                  <div class="event">
                    <div class="label">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                    </div>
                    <div class="content contLike">
                      <div class="summary">
                        <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                          45 Valdecitos
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui feed uifeedComnetUser">
                  <div class="event">
                    <div class="label">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                    </div>
                    <div class="content">
                      <div class="summary">
                        <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                          Leonardo
                        </a>
                        <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                         Hey que genial por fin se vienen las vaciones. Vamos todos a la playa!!
                        </div>                                                    
                      </div>
                    </div>
                    <a href="" class="removeComent">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </a>   
                  </div>
                </div>
                <form class="ui form formComentUser">
                  <div class="field">
                    <input type="text" name="first-name" placeholder="Comentario">
                  </div>
                  {{-- <button class="ui button" type="submit">Submit</button> --}}
                </form>
             </div>
              
              {{-- BLOCK TEXT --}}
             <div class="col-md-12">
                 <div class="ui feed uifeedAvatar">
                   <div class="event">
                     <div class="label">
                       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                     </div>
                     <div class="content">
                       <div class="summary">
                         <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                           Leonardo
                         </a>
                         <div class="date fontMiriamProRegular colorGrisMediumSuave">
                           1 Hour
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <p class="textCOment fontMiriamProRegular colorGrisMediumSuave">Awww que bonito loremp imsum loremp imsum loremp imsum loremp imsum</p>
                 <div class="ui feed uifeedActions">
                   <div class="event">
                     <div class="label">
                       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                     </div>
                     <div class="content contLike">
                       <div class="summary">
                         <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                           45 Valdecitos
                         </a>
                         <div class="date datePint fontMiriamProRegular colorGrisMediumSuave">
                           <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/pines-ico.png">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="ui feed uifeedComnetUser">
                   <div class="event">
                     <div class="label">
                       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                     </div>
                     <div class="content">
                       <div class="summary">
                         <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                           Leonardo
                         </a>
                         <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                           Awww que bonito
                         </div>                           
                       </div>
                     </div>
                   </div>
                 </div>
                 <form class="ui form formComentUser">
                   <div class="field">
                     <input type="text" name="first-name" placeholder="Comentario">
                   </div>
                   {{-- <button class="ui button" type="submit">Submit</button> --}}
                 </form>
             </div>
          </div>

          {{-- BLOQUE LATERAL --}}
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="col-md-12 typeAvisosPost">
              <div class="ui icon message">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-oportunidades.png">
                <div class="content">
                  <p class="fontMiriamProRegular">Oportunidades de empleo, pagos, inicio de proyectos, apertura de sucursales, </p>
                </div>
              </div>
            </div>

            <div class="col-md-12 typeEventCumpleanos">
              <a href="" class="removeComent">
                <i class="fa fa-times" aria-hidden="true"></i>
              </a> 
              <div class="bgHappy">
                <img class="img-responsive PeopleHappy" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png">
              </div>
              <h4 class="fontCovered">¡Feliz cumpleaños Miriam!</h4>
              <h5 class="fontMiriamProRegular">Te desea Valdez Mobile</h5>
              <div class="ui feed uifeedActions">
                <div class="event">
                  <div class="label">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                  </div>
                  <div class="content contLike">
                    <div class="summary">
                      <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                        45 Valdecitos
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ui feed uifeedComnetUser">
                <div class="event">
                  <div class="label">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                  </div>
                  <div class="content">
                    <div class="summary">
                      <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                        Leonardo
                      </a>
                      <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                       Hey que genial por fin se vienen las vaciones. Vamos todos a la playa!!
                      </div>                                                    
                    </div>
                  </div>
                  <a href="" class="removeComent">
                    <i class="fa fa-times" aria-hidden="true"></i>
                  </a>   
                </div>
              </div>
              <form class="ui form formComentUser">
                <div class="field">
                  <input type="text" name="first-name" placeholder="Comentario">
                </div>
                {{-- <button class="ui button" type="submit">Submit</button> --}}
              </form>
          </div>

          <div class="col-md-12">
              <div class="ui feed uifeedAvatar">
                <div class="event">
                  <div class="label">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                  </div>
                  <div class="content">
                    <div class="summary">
                      <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                        Leonardo
                      </a>
                      <div class="date fontMiriamProRegular colorGrisMediumSuave">
                        1 Hour
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/bg-post.jpg" alt="post-user">
              <div class="ui feed uifeedActions">
                <div class="event">
                  <div class="label">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                  </div>
                  <div class="content contLike">
                    <div class="summary">
                      <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                        45 Valdecitos
                      </a>
                      <div class="date datePint fontMiriamProRegular colorGrisMediumSuave">
                        <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/pines-ico.png">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="ui feed uifeedComnetUser">
                <div class="event">
                  <div class="label">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                  </div>
                  <div class="content">
                    <div class="summary">
                      <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                        Leonardo
                      </a>
                      <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                        Awww que bonito
                      </div>                           
                    </div>
                  </div>
                </div>
              </div>
              <form class="ui form formComentUser">
                <div class="field">
                  <input type="text" name="first-name" placeholder="Comentario">
                </div>
                {{-- <button class="ui button" type="submit">Submit</button> --}}
              </form>
          </div>
        </div>
       </div>

      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 captionRecordNotas">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bloqueRecordatorios">
          <h1 class="fontMiriamProRegular">Recordatorios</h1> 
          <div class="captionAvisos">
            <h1 class="fontMiriamProSemiBold">Avisos</h1>
            <p class="fontMiriamProRegular">Oportunidad de empleo para asesores. Interesados contactarse con Lic. Marta Hercúles</p>
          </div>
          <div class="captionPromos">
            <p class="fontMiriamProSemiBold">Promociones de hoy</p>
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/promo-public.jpg">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/promo-public.jpg">
          </div>

          <div class="captionPostGuardadosText">
            <p class="fontMiriamProRegular">Post personalizados</p>
          </div>
          <div class="captionPostGuardados">
          </div>
        </div>

        {{-- BLOQUE CALENDAR --}}
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="captionCalendar">
            <div class="dayMonth">
              <p class="fontMiriamProSemiBold">Agenda</p>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 fechaData">
                <p class="DayAgenda">Lunes</p>
                <p class="DayNumberAgenda">4</p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 fechaData fechType">
                <p class="typEEvento">Hoy capacitación </br>para técnicos</p>
              </div>
            </div>
            <div class="calendarDatas">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner carouselWithMeses" role="listbox">
                  <div class="item active nameMonth">
                     <h3>January</h3>
                     <div class="daysCalendar">
                       <div class="dataDays">s</div>
                       <div class="dataDays">m</div>
                       <div class="dataDays">t</div>
                       <div class="dataDays">w</div>
                       <div class="dataDays">t</div>
                       <div class="dataDays">f</div>
                       <div class="dataDays">s</div>
                     </div>
                     <div class="daysNumberCalendar">
                       <div class="dataDays dayDomingo">    
                       </div>
                       <div class="dataDays">                         
                       </div>
                       <div class="dataDays">                         
                       </div>
                       <div class="dataDays">                         
                       </div>
                       <div class="dataDays">                         
                       </div>
                       <div class="dataDays">1</div>
                       <div class="dataDays">2</div>
                       <div class="dataDays dayDomingo">3</div>
                       <div class="dataDays">4</div>
                       <div class="dataDays">5</div>
                       <div class="dataDays">6</div>
                       <div class="dataDays">7</div>
                       <div class="dataDays">8</div>
                       <div class="dataDays">9</div>
                       <div class="dataDays dayDomingo">10</div>
                       <div class="dataDays">11</div>
                       <div class="dataDays">12</div>
                       <div class="dataDays">13</div>
                       <div class="dataDays">14</div>
                       <div class="dataDays dayEvento">                        
                        <div class="ui button">15</div>
                        <div class="ui special popup">
                          <div class="header">Día de pago</div>
                        </div>
                       </div>
                       <div class="dataDays">16</div>
                       <div class="dataDays dayDomingo">17</div>
                       <div class="dataDays">18</div>
                       <div class="dataDays">19</div>
                       <div class="dataDays">20</div>
                       <div class="dataDays">21</div>
                       <div class="dataDays">22</div>
                       <div class="dataDays">23</div>
                       <div class="dataDays dayDomingo">24</div>
                       <div class="dataDays">25</div>
                       <div class="dataDays">26</div>
                       <div class="dataDays">27</div>
                       <div class="dataDays">28</div>
                       <div class="dataDays">29</div>
                       <div class="dataDays">30</div>
                       <div class="dataDays dayEvento">31</div>
                       <div class="dataDays">
                       </div>
                       <div class="dataDays">
                       </div>
                       <div class="dataDays">
                       </div>
                       <div class="dataDays">
                       </div>
                       <div class="dataDays">
                       </div>
                       <div class="dataDays">
                       </div>
                     </div>

                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>

          {{-- SECTION ADD EVENT CALENDAR --}}
          
          <div class="captionAddEvento">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="#profile" class="fontMiriamProRegular" aria-controls="profile" role="tab" data-toggle="tab">Agregar evento a calendario</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabconteAddComent">
              <div role="tabpanel" class="tab-pane fade" id="profile">
                <form action="">
                  <textarea name="" id="" cols="30" rows="10" placeholder="Escribe el evento"></textarea>
                  <div id='sandbox-container'>                    
                    <div class="input-daterange input-group" id="datepicker">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 captioNFehcIni">     
                        <input type="text" class="input-sm form-control" name="fecha-start" />
                      </div>                 
                    </div>
                    <h4 class="colorGrisMediumSuave fontMiriamProRegular">Seleccionar fecha</h4>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 captioNFehcFina">
                      <input type="submit" class="form-control Submit" name="end"  value='Aceptar'/>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          {{-- SECTION RANKING USERS --}}

          <div class="captionRankingUser">
            <h3 class="fontMiriamProSemiBold">Ranking de empleados</h3>
            <div class="col-md-6">
              <a href="">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="fontMiriamProSemiBold">Lisseth Rivas</p>
                <div class="ui star rating" data-rating="5"></div>
              </a>              
            </div>
            <div class="col-md-6">
              <a href="">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="fontMiriamProSemiBold">Lisseth Rivas</p>
                <div class="ui star rating" data-rating="5"></div>
              </a>              
            </div>
            <div class="col-md-6">
              <a href="">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="fontMiriamProSemiBold">Lisseth Rivas</p>
                <div class="ui star rating" data-rating="5"></div>
              </a>              
            </div>
            <div class="col-md-6">
              <a href="">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="fontMiriamProSemiBold">Lisseth Rivas</p>
                <div class="ui star rating" data-rating="5"></div>
              </a>              
            </div>
            <div class="col-md-12 capInteRankingSube">
              <h2 class="fontCovered">¡Sube de Ranking!</h2>
            </div>
          </div>

        {{-- CAPTION USER LIVES --}}
          <div class="captionUsersInLive">
            <div class="ui accordion">
              <h3 class="fontMiriamProRegular">Usuarios</h3>
              <div class="title">
                
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-donald.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-lise.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>              
              </div>
              <div class="content">
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-donald.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-lise.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="captionActivitiesRecientes">
            <h3 class="fontMiriamProSemiBold">Actividades recientes</h3>
            <div class="notficiActivitie">
              <div class="ui relaxed divided list">
                <div class="item PublicatiOn">
                  <i class="large github middle aligned icoPubli"></i>
                  <div class="content">
                    <a class="header"><strong class="nameUserNotifique">Juan Carlos Valdez </strong> tiene una nueva <span class="typeAccionNotifi">publicación</span></a>
                  </div>
                </div>
                <div class="item NewFotos">
                  <i class="large github middle aligned icoFotos"></i>
                  <div class="content">
                    <a class="header"><strong class="nameUserNotifique">Janixia </strong> ha publicado <span class="typeAccionNotifi">nuevas fotos</span></a>
                  </div>
                </div>
                <div class="item ActivitiPago">
                  <i class="large github middle aligned icoPagos"></i>
                  <div class="content">
                    <a class="header">¡Se ha realizado el pago a las 7:00 P.M.!</a>
                  </div>
                </div>
                <div class="item Profilesa">
                  <i class="large github middle aligned icoProFile"></i>
                  <div class="content">
                    <a class="header"><strong class="nameUserNotifique">Edgardo </strong> actualizó su perfil</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="captionGaleriFotos">
            <h3 class="fontMiriamProSemiBold">Galería de fotos</h3>
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/galeriFotos.jpg" alt="">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/galeriFotos.jpg" alt="">
          </div> --}}

        </div>
        
      </div>
    </div>

     <div class="col-md-12 datPublich">
       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
     </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog contPusblishDialogo" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="col-xs-12 col-sm-12 col-md-12 continPublish">
              <form action="home_submit" method="get" class="sectionPublichUser" accept-charset="utf-8">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <textarea name="" placeholder="Escribe un comentario"></textarea>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bloquesActions">
                  <div class="col-md-6 actionpuBlish">
                    <div class="col-md-2 Adjuntar">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt="">
                    </div>
                    <div class="col-md-2 AdjuntarFoto">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                    </div>
                    <div class="col-md-2 DestacarPuslish">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/destacarIco.png" alt="">
                    </div>
                    <div class="col-md-2 AlertPublish">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/alertIco.png" alt="">
                    </div>
                  </div>
                  <div class="col-md-6 ButtinPublish">
                    <input type="submit" value="Enviar"></input>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
