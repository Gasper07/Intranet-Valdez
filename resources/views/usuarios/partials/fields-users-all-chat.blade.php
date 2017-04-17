<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="liveDataHome">
    <div class="ui accordion">
      <h3 class="fontMiriamProRegular">Usuarios</h3>
      <div class="title">
        <p class="gasper"> {{ $banderaOnline = 0}}</p>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitrados columnChatss captionLikechatsFlotante">
          @foreach($getUsers as $users)
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
              <a href="#!" data-iduserchat="{{ $users->id_usuario }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $users->foto }}')">
                </div>            
              </a>                
            </div>  
          @endforeach  
        </div>                            
      </div>
      <div class="content">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitrados columnChatss captionLikechatsFlotante">
          @foreach($getUsers as $users)
            <p class="gasper"> {{ $banderaOnline = $banderaOnline+1 }}</p>   
            @if($banderaOnline >= 4 )
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="#!" data-iduserchat="{{ $users->id_usuario }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $users->foto }}')">
                  </div>            
                </a>                
              </div>  
            @endif
          @endforeach  
        </div>
      </div>
    </div>
  </div>
</div>