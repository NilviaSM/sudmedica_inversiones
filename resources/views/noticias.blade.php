<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a008cc3c3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Sudmedica</title>
</head>
<body>
    @include('snipets.navbar')
    <picture class="imagen__container">
        <img src="{{asset('img/noticias.png')}}" alt="" class="imagen">
    </picture>
    @include('snipets.noticias')
    <div class="busqueda__container container">
        <div class="busqueda__calendar">
            @include('snipets.calendario')
        </div>
        <div class="busqueda__results">
            <input type="text" class="txt__busqueda" id="search" placeholder="Buscar" style="border:1px solid #114071">
            <p class="text__resultado__busqueda">Resultados de la Búsqueda</p>
            <ul class="noticias__list">
            </ul>
        </div>
    </div>
    @include('snipets.contacto')
    <script>
        $(".noticias__list").empty();
        $("#search").keypress(()=>{
            $.ajax({
                url:"{{route('searchNoticias')}}",
                dataType: 'json',
                data: {q:$('#search').val()},
                success:(result)=>{
                    $(".noticias__list").empty();
                    result.forEach((data)=>{
                        element = $("<li></li>").attr("id", data).text(data.label)
                        $(".noticias__list").append(element);
                        element.click(()=>{
                            $("#noticias__titulo").text(data.label)
                            $("#image__noticia").attr("src", `{{asset('${data.image_path}')}}`)
                            $("#noticias__contenido").text(data.contenido);
                            $(".noticias__list").empty();

                        })
                    })
                }
            })
        })
    </script>
</body>
</html>