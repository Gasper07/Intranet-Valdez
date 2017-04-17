<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {!! Html::style('public/css/app.css') !!}
    <!-- Bootstrap CSS-->
    {!! Html::style('public/assets/css/bootstrap.css') !!}
    {{-- Style Menu Desplace --}}
    {!! Html::style('public/assets/css/menu/component.css') !!}
    <!-- Semantic Ui CSS -->
    {!! Html::style('public/assets/css/semantic.css') !!}
    <!-- STYLE FONT AWESOME -->
    {!! Html::style('public/assets/css/font-awesome.css') !!}

    <!-- Datepicker Files -->
    {!! Html::style('public/assets/css/datePicker/bootstrap-datepicker3.css') !!}
    {!! Html::style('public/assets/css/bootstrap-datetimepicker.min.css') !!}

    {{-- Main style --}}
    {!! Html::style('public/assets/css/main.css') !!}
    {!! Html::style('public/assets/css/main_responsive.css') !!}

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript" ></script> 
    <script src="//js.pusher.com/2.2/pusher.min.js" type="text/javascript" type="text/javascript" ></script>  
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.3.0/bootbox.min.js" type="text/javascript" ></script>    
    <script type="text/javascript"> 
    // Enable pusher logging - don't include this in production //Pusher.log=function(message) {  
    //if (window.console && window.console.log) {     
    //window.console.log(message);    
    //} //};    
    </script>   
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="bgUser">
    <div id="app">
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
                    <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-paleta.png" alt="Paleta-Colores">
                    <ul id="gn-menu" class="nav navbar-nav gn-menu-main">
                        <li class="gn-trigger">
                            <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                            <nav class="gn-menu-wrapper">
                                <div class="gn-scroller">
                                    <ul class="gn-menu">
                                        <li class="gn-search-item">
                                            <a href="">
                                             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                                             <p class="colorBlack fontMiriamProSemiBold">{{ Auth::user()->name }}</p>                            
                                            </a>
                                        </li>
                                        <li class="bloquesMarca marEntrada">
                                            <a class="BgYellow fontMiriamProSemiBold colorBlackSuave">Marcar entrada</a>
                                            <div class='secEntrada'>
                                              <input type="hidden" name="id_user_login" class="IdloginUser" value="{{ Auth::user()->id }}">
                                            </div>
                                        </li>
                                        <li class="bloquesMarca marSalida">
                                            <a class="BgYellow fontMiriamProSemiBold colorBlackSuave">Marcar salida</a>
                                            <div class='secEntrada'>
                                              <input type="hidden" name="id_user_login" class="IdloginUser" value="{{ Auth::user()->id }}">
                                            </div>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil">
                                            <a href="profile" class="fontMiriamProRegular colorGrisMediumSuave lineJustify">Editar perfil</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil">
                                            <a href="chatUsers" class="fontMiriamProRegular colorGrisMediumSuave lineJustify">Mensajes privados</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil">
                                            <a href="profile" class="fontMiriamProRegular colorGrisMediumSuave lineJustify borderLineGris">Ver galerias</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil accionesBussines">
                                            <a href="http://127.0.0.1/Sites/Intranet-chat/public/assets/pdf/Manual-de-empleado.pdf" target="_blank" class="fontMiriamProRegular colorGrisSuave lineJustify">Manual de empleado</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil accionesBussines">
                                            <a class="fontMiriamProRegular colorGrisSuave lineJustify">Reglamento institucional</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil accionesBussines">
                                            <a class="fontMiriamProRegular colorGrisSuave lineJustify">Ayuda</a>
                                        </li>
                                    </ul>
                                </div><!-- /gn-scroller -->
                            </nav>
                        </li>
                    </ul>
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
                                    <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/house-ido.png" class="img-responsive" alt="">                                    
                                </a>
                            </li>
                            <div class="ui dropdown dropdownSemantic notifiICos fontMiriamProRegular">
                              <a href="#!">
                                  <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/notify-ico.png" class="img-responsive" alt="">
                                  <div class="notifiCount">
                                      <p>3</p>
                                  </div>
                              </a>
                              <div class="menu">
                                <div class="item">New</div>
                                <div class="item">
                                  <span class="description">ctrl + o</span>
                                  Open...
                                </div>
                                <div class="item">
                                  <span class="description">ctrl + s</span>
                                  Save as...
                                </div>
                                <div class="item">
                                  <span class="description">ctrl + r</span>
                                  Rename
                                </div>
                                <div class="item">E-mail Collaborators</div>
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

        @yield('content')
    </div>

    <!-- Scripts -->
    {!! Html::script('public/js/app.js') !!}
    {!! Html::script('public/assets/js/menu/classie.js') !!}
    {!! Html::script('public/assets/js/menu/gnmenu.js') !!}

    <script>
        new gnMenu( document.getElementById( 'gn-menu' ) );
    </script>

    <script>
      $(window).bind("beforeunload", function() { 
        var iduserLoIn = {{ $idUserLogin }} ;

          $.ajaxSetup({
              headers: { 'X-CSRF-Token': $('input[name=_token]').attr('value') }
          });
          $.ajax({
              url: 'http://127.0.0.1/Sites/Intranet-chat/datalogout',
              type: 'POST',
              headers: { 'X-CSRF-Token': $('input[name=_tokens]').attr('value') },
              data: "idlogin="+iduserLoIn+"&_tokens=YIIXEDMNztyGoKqDrX7B9V20THP2hP0fAZFeiK3L",
              dataType: 'json',
              success: function(result, index, value, data) {
                // Iniciamos contador
                console.log('ss');
                // setTimeout(function(){
                //   return 
                // }, 25000);

              },
              error: function() {
                  console.log('Error');
              }
          }); 


          // return confirm("deseas cerrar la ventana?"); 
      });
    </script>

    <!-- Semantic Ui CSS -->
    <script class="diSemantic" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/js/semantic.js"></script>

    <script>
        $('.dropdownSemantic')
          .dropdown({
            transition: 'drop'
          });

   </script>
   <script>
      $('.button')
        .popup({
          inline: true
        });

      $('.rating')
        .rating({
          maxRating: 5,
          disable: false,
        });
      $('.rating')
       .rating('disable')
      ;

      $('.accordion')
        .accordion({
          selector: {
            trigger: '.title div .fa-angle-down'
          }
        })
      ;

      $('.dropdownSemantic')
          .dropdown({
            transition: 'drop'
          });

        $('.max.example .ui.fluid.dropdown')
          .dropdown({
            maxSelections: 15
          })
        ;
        $('.dataClicDEsplace .accordion')
          .accordion({
            selector: {
              trigger: '.title .fa-angle-down'
            }
          })
        ;


      


   </script>

   {!! Html::script('public/assets/js/jquery-1.11.1.min.js') !!}

   <script >

     var iduserLoIn = {{ $idUserLogin }} ;
     function loadUserOnline(){
        $.ajaxSetup({
            headers: { 'X-CSRF-Token': $('input[name=_token]').attr('value')},
        });
        $.ajax({
            url: 'http://127.0.0.1/Sites/Intranet-chat/onlineUser',
            type: 'POST',
            headers: { 'X-CSRF-Token': $('input[name=_tokens]').attr('value') },
            data: "_tokens=YIIXEDMNztyGoKqDrX7B9V20THP2hP0fAZFeiK3L",
            dataType: 'json',
            success: function(result, index, value, data) {
              // Iniciamos contador
              console.log('ss');
              var banderaVeriCOunt = 0;

              $('.captionUsersInLive>div.accordion>div.title>div.captionDenoews').remove();
              $('.captionUsersInLive>div.accordion>div.content>div').remove();
              $('.captionUsersInLive>div.accordion>div.content>p').remove();
              // $('.captionUsersInLive>div.accordion').append('<div class="title"></div>');
              $.each(result, function(index, element) {
                var dataUseronlineID = element.id_user;
                var dataUseronFoto = element.foto;
                banderaVeriCOunt = banderaVeriCOunt+1;
                var clStyImg = 'styRos'+dataUseronlineID+'';

                if(banderaVeriCOunt <= 4){
                 $('.captionUsersInLive>div.accordion>div.title').prepend('<div class="captionCircleUser captionDenoews AlluserReegitradosPorBloque"><a href="#!" class="userLive" data-idonline='+dataUseronlineID+' data-iduserchat='+dataUseronlineID+'> <div class="label dataPrubeIm vloqImageUser dataProfileAllUsersOnline '+clStyImg+'"> </div></a></div>');
                 $('.'+clStyImg).css('background-image', 'url("http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/'+dataUseronFoto+'")');
                }else if(banderaVeriCOunt > 4){
                  $('.captionUsersInLive>div.accordion>.content').append('<div class="captionCircleUser captionDenoews AlluserReegitradosPorBloque"><a href="#!" class="userLive" data-idonline='+dataUseronlineID+' data-iduserchat='+dataUseronlineID+'> <div class="label dataPrubeIm vloqImageUser dataProfileAllUsersOnline '+clStyImg+'"> </div> </a></div>');
                  $('.'+clStyImg).css('background-image', 'url("http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/'+dataUseronFoto+'")');
                }
                console.log('entro');
                
              });

            },
            error: function() {
                console.log('Error');
            }
        }); 
     }  

     var mulpleForMile = iduserLoIn*2000;

     var CreateTimeInterval = 5000 + mulpleForMile;

     console.log(CreateTimeInterval);

     setInterval(loadUserOnline, CreateTimeInterval);

   </script>

   {!! Html::script('public/assets/js/moment.js') !!}
   {!! Html::script('public/assets/js/bootstrap-datetimepicker.min.js') !!}
   <script type="text/javascript">
       $(function () {
           $('#datetimepicker12').datetimepicker({
               inline: true,
               sideBySide: true
           });
       });
   </script>

   {!! Html::script('public/assets/js/datePicker/bootstrap-datepicker.js') !!}
   <script type="text/javascript">
      $('#sandbox-container .input-daterange').datepicker({
          format: "yyyy-mm-dd",
          autoclose: true
      });
   </script>

   {!! Html::script('public/assets/js/main_chat.js') !!}
   {!! Html::script('public/assets/js/main.js') !!}
</body>
</html>
