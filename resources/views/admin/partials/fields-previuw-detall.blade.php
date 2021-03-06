@extends('layouts.Template-admin')

@section('content')

{{-- SECTION MENU INTERNO HOME --}}
<section class="container-fluid">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionMenuInterno menuInernoBoard">
    <ul>
        <li><a href="http://127.0.0.1/Sites/Intranet-chat/admin/home">Home</a></li>
        <li><a href="http://127.0.0.1/Sites/Intranet-chat/admin/board">Board</a></li>
        <li><a href="http://127.0.0.1/Sites/Intranet-chat/admin/usuarios">Usuarios</a></li>
    </ul>
  </div>
</section>
<section class="container-fluid containernavNotifis">
  <nav class="navbar navbar-default navbar-static-top navbarHome BgYellow">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              {{-- <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a> --}}
          </div>

          <div class="collapse navbar-collapse collapseMenuUser" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <img class="paletaAdminBoard" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-paleta.png" alt="Paleta-Colores">
              <ul class="centerNameUserMenu">
                  <li class="colorBlack fontMiriamProRegular">¡Hola! {{ Auth::user()->name }}</li>
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right navulRIght">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="icosMenus">
                          <a href="#!">
                              <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/homeNotifiAdmin.png" class="img-responsive" alt="">                                    
                          </a>
                      </li>
                      <div class="ui dropdown dropdownSemantic notifiICos fontMiriamProRegular">
                        <a href="#!">
                            <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/campaniNotifiAdmin.png" class="img-responsive" alt="">
                            <div class="notifiCount">
                              @include('admin.partials.fields-history-notificaciones-cantidad')
                            </div>
                        </a>
                        <div class="menu">
                          @include('admin.partials.fields-history-notificaciones-board')
                        </div>
                      </div>
                      <li class="dropdown uSerLogue colorBlackSuave fontMiriamProRegular">
                          <a href="#" class="dropdown-toggle colorBlackSuave" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>
</section>


{{-- SECTION BLOQUE NOTIFICACION Y MENSAJES --}}
<section class="container-fluid sectionAdminNotifiMensa sectionPostDats">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionBoard">
      <div class="container continerWithSite">
          <div class="row">
            @if(Session::has('Create_Event'))
              <p class="alert alert-success">{{Session::get('Create_Event')}}</p>
            @endif
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 captionPosteos captionPreviewPost">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  @foreach($JoinTableUserPosts as $dataUSe)
                    @foreach ($getPost as $keygetPost) 
                      @if($keygetPost->id_usuario == $dataUSe->id_usuario)
                        @if($keygetPost->id_tipo_publicacion != 5)
                          <div class="col-md-12">
                            <div class="ui feed uifeedAvatar">
                              <div class="event">
                                <div class="label dataPrubeIm" style="background-image: url('http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/profiles/{{ $dataUSe->foto }}')">
                                </div>
                                <div class="content">
                                  <div class="summary postPosss">
                                    <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                      {{ $dataUSe->name }}
                                    </a>
                                    <div class="date fontMiriamProRegular colorGrisMediumSuave">
                                      @if($keygetPost->id_tipo_publicacion == 2)
                                        <img class="img-responsve alertPost" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/icons/alertico.png" alt="">
                                      @endif
                                      <p class="gasper">{{ $carbon = new \Carbon\Carbon() }}</p>
                                      <p class="gasper">{{ $fechaActual = $carbon->now()->format('Y-m-d') }}</p>
                                      <p class="gasper">{{ $horaActual = $carbon->now()->format('H:i:s') }}</p>
                                      <p class="gasper">{{ $date = new \Carbon\Carbon($keygetPost->created_at) }}</p>
                                      <p class="gasper">{{ $dayPost = $date->format('Y-m-d') }}</p>
                                      <p class="gasper">{{ $HoraPost = $date->format('H:i:s') }}</p>
                                      @if($fechaActual == $dayPost)
                                        {{ date('H:i',strtotime($horaActual) - strtotime($HoraPost)) }}
                                       @else
                                         {{ $dayPost }}
                                       
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p class="textCOment fontMiriamProRegular colorGrisMediumSuave">{{ $keygetPost->descripcion }}</p>
                              <p class="gasper">{{ $totalImges = count($arrayOfImages) }}</p>
                              @foreach($arrayOfImages as $imagess) 
                                @for($im =0; $im<$totalImges; $im++)
                                  <img class="img-responsive clImgView" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/documents/{{ $imagess[$im] }}" alt="{{ $imagess[$im] }}"  data-toggle="modal" data-target="#myModalswPost">                          
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModalswPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog dialoDataImgen" role="document">
                                        <div class="modal-content">
                                          <div class="modal-body">
                                            <img class="img-responsive" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/documents/{{ $imagess[$im] }}" alt="{{ $imagess[$im] }}">
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                @endfor                      
                              @endforeach

                              <p class="gasper">{{ $totalDocu = count($ArrayOfDocuemnts) }}</p>
                              @foreach($ArrayOfDocuemnts as $docume)
                                @for($im =0; $im<$totalImges; $im++)
                                  <a href="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/documents/{{ $docume }}" class="dataDpcuCl" download="{{ $docume }}">
                                    <img class="img-responsive claa__cupo" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/bogIcoDocuments.png" />
                                  </a>
                                @endfor
                              @endforeach
                            <div class="ui feed uifeedActions">
                              <div class="event">
                                <div class="label">
                                  <img class="img-responsive" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/etiqueta-ico.png">
                                </div>
                                <div class="content contLike">
                                  <div class="summary">
                                    <p class="gasper"> {{$banderaLikes3 = 0}}</p>
                                    @foreach($Likes as $keyLikes => $likes)
                                      @if( $keygetPost->id == $likes['id_publicacion'])
                                        <p class="gasper"> {{ $banderaLikes3 = $banderaLikes3+1}}</p>
                                        <a class="user colorGrisMediumSuave fontMiriamProSemiBold clkLike">
                                          @if(in_array(Auth::user()->id, $likes['id_usuarios_likes']))
                                            Atí y a {{ $likes['total_likes']-1 }} les gusta
                                            <input type="hidden" class="dislike" name="dislike_action_id" value="{{ Auth::user()->id }}">
                                          @else
                                            {{ $likes['total_likes']}} Me gusta
                                          @endif    
                                          <input type="hidden" class="dislike" name="dislike_action_id" value="">
                                          <input type="hidden" class="idUseLike" name="like_action_id" value="{{ Auth::user()->id }}">
                                          <input type="hidden" class="idPubliLike" name="like_publicacion_id" value="{{ $keygetPost->id }}">
                                        </a>
                                      @endif
                                    @endforeach
                                    @if($banderaLikes3 == 0)
                                      <a class="user colorGrisMediumSuave fontMiriamProSemiBold clkLike">
                                        0 Me gusta
                                        <input type="hidden" class="idUseLike" name="like_action_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" class="idPubliLike" name="like_publicacion_id" value="{{ $keygetPost->id }}">
                                      </a>
                                    @endif
                                    <div class="date datePint fontMiriamProRegular colorGrisMediumSuave clickPostPerson">
                                      <img class="img-responsive" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/pines-ico.png">
                                      <input type="hidden" class="idUserPostPersona" name="like_action_id" value="{{ Auth::user()->id }}">
                                      <input type="hidden" class="idPostPersona" name="like_publicacion_id" value="{{ $keygetPost->id }}">
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 captionlokComen">
                              @foreach($Coments as $datComents)
                                @if($keygetPost->id == $datComents->id_publicacion)
                                  <div class="ui feed uifeedComnetUser">
                                    <div class="event">
                                      <div class="label dataPrubeIm" style="background-image: url('http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/profiles/{{ $datComents->foto }}')">
                                      </div>
                                      <div class="content">
                                        <div class="summary">
                                          <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                            {{ $datComents->name }}
                                          </a>
                                          <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                                            {{ $datComents->comentarios }}
                                          </div>                           
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                              @endforeach
                            </div>
                            <form class="ui form formComentUser">
                              <div class="field">
                                <textarea name="comentario_post" required></textarea>
                                <input type="hidden" class="iduserComent" name="coment_action_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" class="idDataPost" name="data_id_post" value="{{ $keygetPost->id }}">
                              </div>
                              <a href="" class="dataComenyt"><p>Comentar</p></a>
                            </form>
                          </div>
                          @else
                            <div class="col-md-12 typeEventCumpleanos">
                              {{-- <a href="" class="removeComent">
                                <i class="fa fa-times" aria-hidden="true"></i>
                              </a> --}} 
                              <div class="bgHappy">
                                <img class="img-responsive PeopleHappy" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/profiles/{{ $dataUSe->foto }}">
                              </div>
                              <h4 class="fontCovered">¡Feliz cumpleaños {{ $dataUSe->name }}!</h4>
                              <h5 class="fontMiriamProRegular">{{ $keygetPost->descripcion }}</h5>
                              <div class="ui feed uifeedActions">
                                <div class="event">
                                  <div class="label">
                                    <img class="img-responsive" src="http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/images/etiqueta-ico.png">
                                  </div>
                                  <div class="content contLike">
                                    <div class="summary">
                                      <p class="gasper"> {{$banderaLikes10 = 0}}</p>
                                      @foreach($Likes as $keyLikes => $likes)
                                        @if( $keygetPost->id == $likes['id_publicacion'])
                                          <p class="gasper"> {{ $banderaLikes10 = $banderaLikes10+1}}</p>
                                          <a class="user colorGrisMediumSuave fontMiriamProSemiBold clkLike">
                                            @if(in_array(Auth::user()->id, $likes['id_usuarios_likes']))
                                              Atí y a {{ $likes['total_likes']-1 }} les gusta
                                              <input type="hidden" class="dislike" name="dislike_action_id" value="{{ Auth::user()->id }}">
                                            @else
                                              {{ $likes['total_likes']}} Me gusta
                                            @endif    
                                            <input type="hidden" class="dislike" name="dislike_action_id" value="">
                                            <input type="hidden" class="idUseLike" name="like_action_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" class="idPubliLike" name="like_publicacion_id" value="{{ $keygetPost->id }}">
                                          </a>
                                        @endif
                                      @endforeach
                                      @if($banderaLikes10 == 0)
                                        <a class="user colorGrisMediumSuave fontMiriamProSemiBold clkLike">
                                          0 Me gusta
                                          <input type="hidden" class="idUseLike" name="like_action_id" value="{{ Auth::user()->id }}">
                                          <input type="hidden" class="idPubliLike" name="like_publicacion_id" value="{{ $keygetPost->id }}">
                                        </a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 captionlokComen">
                                @foreach($Coments as $datComents)
                                  @if($keygetPost->id == $datComents->id_publicacion)
                                    <div class="ui feed uifeedComnetUser">
                                      <div class="event">
                                        <div class="label dataPrubeIm" style="background-image: url('http://app-7983e06f-f506-428d-aef9-aea82667c6d7.cleverapps.io/public/assets/profiles/{{ $datComents->foto }}')">
                                        </div>
                                        <div class="content">
                                          <div class="summary">
                                            <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                              {{ $datComents->name }}
                                            </a>
                                            <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                                              {{ $datComents->comentarios }}
                                            </div>                           
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  @endif
                                @endforeach
                              </div>
                              <form class="ui form formComentUser">
                                <div class="field">
                                  <textarea name="comentario_post" required></textarea>
                                  <input type="hidden" class="iduserComent" name="coment_action_id" value="{{ Auth::user()->id }}">
                                  <input type="hidden" class="idDataPost" name="data_id_post" value="{{ $keygetPost->id }}">
                                </div>
                                <a href="" class="dataComenyt"><p>Comentar</p></a>
                              </form>
                            </div>
                        @endif
                      @endif
                    @endforeach
                  @endforeach
                </div>

            </div>

          </div>

           <div class="col-md-12 datPublich">
             <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
           </div>

          </div>

          @include('usuarios.partials.field-public-post')
      </div>


      <div class="alert alert-info dataClMoPosPEr" role="alert">¡Publicacion Agregada!</div>
      {{-- Mensajes entrada salida --}}
      @include('usuarios.partials.fields-entrada-salida-mensajes')

@endsection