<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 geleriFotosUser fotoUserFake">
  <h3>Galería de fotos</h3>
  @foreach($arrayOfImages as $DataImages)
    <p class="gasper">{{ $canditdadImagesForArray = count($DataImages) }}</p>
    @for($ga=0; $ga < $canditdadImagesForArray; $ga++ )
      <img class="img-responsive clImgView" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/documents/{{ $DataImages[$ga] }}" alt="{{ $DataImages[$ga] }}"  data-toggle="modal" data-target="#myModalswPost">
        
      <!-- Modal -->
      <div class="modal fade" id="myModalswPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog dialoDataImgen" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/documents/{{ $DataImages[$ga] }}" alt="{{ $DataImages[$ga] }}">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    @endfor              
  @endforeach
</div>