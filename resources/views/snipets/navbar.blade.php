<div class="linea_azul">

</div>
<nav class="nav" id="nav">
    <div class="nav__logo">
        <img src="{{asset('img/logo_sudmedica_inversiones.svg')}}" alt="">
    </div>
        <div class="nav__menu__data">
            <p>Lenguaje: <b>Español</b></p>
            <div class="nav__opciones">
                <ul class="nav__links">
                    <li class="nav__list"><a href="{{url('')}}" class="nav__link {{ Request::url() == url('') ? 'nav__link__active' : '' }}">Inicio</a></li>
                    <li class="nav__list"><a href="{{url('nosotros')}}" class="nav__link {{ Request::url() == url('/nosotros') ? 'nav__link__active' : '' }}">Nosotros</a></li>
                    <li class="nav__list"><a href="{{url('noticias')}}" class="nav__link {{ Request::url() == url('/noticias') ? 'nav__link__active' : '' }}">Noticias</a></li>
                    <li class="nav__list"><a href="{{url('documentos')}}" class="nav__link {{ Request::url() == url ('/documentos')? 'nav__link__active' : '' }}">Documentos</a></li>
                    <li class="nav__list"><a href="{{url('contacto')}}" class="nav__link {{ Request::url() == url('/contacto') ? 'nav__link__active' : '' }}">Contacto</a></li>
                </ul>
                <ul class="nav__sociales">
                    <li class="nav__list">
                        <a href="" class="nav__link">
                            <i class="fa-brands fa-linkedin-in nav__icons"></i>
                        </a>
                    </li>
                    <li class="nav__list">
                        <a href="" class="nav__link">
                            <i class="fa-brands fa-instagram nav__icons"></i>
                        </a>
                    </li>
                    <li class="nav__list">
                        <a href="" class="nav__link">
                            <i class="fa-brands fa-x-twitter nav__icons"></i>
                        </a>
                    </li>
                    <li class="nav__list">
                        <a href="" class="nav__link">
                            <i class="fa-brands fa-facebook-f nav__icons"></i>
                        </a>
                    </li>
                    <li class="nav__list">
                        <a href="" class="nav__link">
                            <i class="fa-brands fa-youtube nav__icons"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <a href="#" class="nav__close">
        <img src="{{asset('img/close__icon.svg')}}" width="50px" alt="" class="nav__img">
    </a>
    <a href="#nav" class="nav__hamburger">
        <img src="{{asset('img/hamburger__icon.svg')}}" width="50px" alt="" class="nav__img">
    </a>
</nav>