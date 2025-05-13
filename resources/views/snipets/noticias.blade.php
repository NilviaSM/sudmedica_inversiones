<div class="container noticias">
    @if($noticias)
    <div class="noticias__container">
        <div class="noticias__texto">
            <h2 class="noticias__title" id="noticias__titulo">{{ $noticias->titulo }}</h2><br>
            <p class="noticias__contenido">{!! $noticias->contenido !!}</p>
            <picture class="noticias__imagen">
                <img src="{{ asset($noticias->image_path) }}" alt="imagen-noticia" id="image__noticia">
            </picture>
        </div>

    </div>
    @else
        <p class="noticias__info_error">No hay noticias disponibles en este momento.</p>
    @endif
</div>
