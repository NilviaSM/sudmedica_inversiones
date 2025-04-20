<div class="container">
    <h2 class="noticias__title" id="noticias__titulo">{{$noticias->titulo}}</h2>
    <div class="noticias__container">
        <picture  class="noticias__imagen">
            <img src="{{asset($noticias->image_path)}}" alt="imagen-noticia" id="image__noticia">
        </picture>
        <div class="noticias__info" id="noticias__contenido">
            {{$noticias->contenido}}
        </div>
    </div>
</div>
