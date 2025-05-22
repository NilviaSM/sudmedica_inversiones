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
    <link rel="stylesheet" href="{{ asset('css/sustentabilidad.css') }}">
    <title>Sudmedica</title>
</head>
<html>
    @include("snipets.navbar")
    <picture class="imagen__container sustentabilidad__main__image">
        <img src="{{asset('img/white-fluffy-clouds-in-blue-sky-background.png')}}" alt="" class="imagen">
    </picture>
    <div class="sustentabilidad__container container">
        <div class="sustentabilidad__column__01">
        <h1>{{ __("messages.sustentabilidad_title") }}</h1><br>
        <p>{!!  __("messages.sustentabilidad_column_01") !!}
        </p>    
        </div>
        <div class="sustentabilidad__column__02">
        <p>
        {!!  __("messages.sustentabilidad_column_02") !!}
        </p>    
        </div>
    </div>
    @include("snipets.contacto")
</html>