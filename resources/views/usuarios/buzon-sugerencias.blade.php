@extends('layouts.Template-home')

@section('content')
<div class="container continerWithSite">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionPosteos captionProfiles">

        {{-- CAPTION USER LIVES --}}        
        @include('usuarios.partials.fields-users-all-chat')
        
        {{-- SOLICITUD EN PROCESO --}}
        @include('usuarios.partials.fields-solicitud-proceso')        

        {{-- HORARRIOS DE USURIOS --}}
        @include('usuarios.partials.fields-horarios')
        
        {{-- BUZON DE SUGERENCIAS , EMERGENCIAS Y SOLICITUDES--}}
        @include('usuarios.partials.fields-accione-permisos-sugerencias-andmore')

        {{-- Dias disponibles --}}
        @include('usuarios.partials.fields-day-vacaciones-users')

        {{-- Manuales --}}
        @include('usuarios.partials.fields-manuales')

     </div>

     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 sectionProfiles sectionPermissionRequest">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 motioEmergency">
         <h3>Estamos abiertos a escucharte</h3>
         <h5>Cuéntanos tu opinión</h5>
         <div class="col-xs-12 col-sm-12 col-md-12 continPublish">
           <form action="buzon-sugerencias-send" method="post" class="sectionPublichUser SugerenciaSolicitud" accept-charset="utf-8" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">  
             <div class="col-xs-12 col-sm-12 col-md-12">
               <textarea name="motivo_sugerencia" placeholder="Escribe un comentario"></textarea>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12 bloquesActions actionINEmergency">
               <div class="contenMoreDocuments">
                 <input type="file" class="fileInputEmergenci" name="file_inputemergencia_document[]" />
               </div>
               <div class="contenMoreDocuments">
                 <input type="file" class="fileInputEmergenci2" name="file_inputemergencia_document[]" />
               </div>
               <div class="contenMoreDocuments">
                 <input type="file" class="fileInputEmergenciImg" name="file_inputemergenci_imga[]" />
               </div>
               <div class="contenMoreDocuments">
                 <input type="file" class="fileInputEmergenciImg2" name="file_inputemergenci_imga[]" />
               </div>
               <div class="col-md-6 actionpuBlish">
                 <div class="col-md-2 AdjuntarFoto AdjuntarFotoEmergency">
                   <img class="img-responsive img1FotEmer" onclick="chooseFileIMGEmer()" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                 </div>
               </div>
               <div class="col-md-6 ButtinPublish">
                 <input type="submit" value="Enviar">
               </div>
             </div>
           </form>
         </div>
       </div>

       {{-- MENSAJE SOLICTUD ENVIADA --}}
       @if(Session::has('Create_Solicitud_sugerencia'))
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 SendSolicitud">
           <h1>Fue enviado con exito</h1>
         </div>
       @endif


     </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionRecordNotas SecCalendar">
        {{-- BLOQUE CALENDAR --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          {{-- SECTION CALENDAR AND ADD EVENT CALENDAR --}}
          @include('usuarios.partials.fields-lateral-calendar')          
        </div>        
      </div>
    </div>

     <div class="col-md-12 datPublich">
       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
     </div>

    </div>

    <!-- Modal -->
    @include('usuarios.partials.field-public-post')
</div>

<div class="alert alert-info dataClMoPosPEr" role="alert">¡Publicacion Agregada!</div>
{{-- Mensajes entrada salida --}}
@include('usuarios.partials.fields-entrada-salida-mensajes')

{{-- WINDOWS CHAT --}}
@include('usuarios.partials.fields-windows-chat')
@endsection
