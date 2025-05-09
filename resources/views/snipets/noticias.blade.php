<div class="container noticias">
    @if($noticias)
    <div class="noticias__container">
        <picture  class="noticias__imagen">
            <img src="{{asset($noticias->image_path)}}" alt="imagen-noticia" id="image__noticia">
        </picture>
        <h2 class="noticias__title" id="noticias__titulo">{{$noticias->titulo}}</h2><br>
        <div class="noticias__info" id="noticias__contenido">
            {!! $noticias->contenido !!}
        </div>
    </div>
    @else
        <p class="noticias__info_error">No hay noticias disponibles en este momento.</p>
    @endif
</div>
