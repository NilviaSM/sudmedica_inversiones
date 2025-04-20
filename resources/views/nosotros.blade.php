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
    <title>Sudmedica</title>
</head>
<body>
    @include("snipets.navbar")
    @include("snipets.carrusel")
    <div class="container">
        <div class="directorio">
            <h1 class="directorio__titulo titulo">
                Directorio
            </h1>
            <div class="directorio__cards cards">
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/man.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Freddy Hurtado</h5>
                        <h5 class="card__ocupation">PRESIDENTE</h5>
                        <p class="card__description">Ingeniero Comercial de la Universidad de Chile, y con dos MBA en la Pontificia Universidad Católica. En su dilatada trayectoria profesional 
                            ocupó altos cargos ejecutivos en Antofagasta Minerals: Finanzas, Control de Gestión y 
                            Controller; y tuvo una activa participación en el Comité de Financiamiento del Proyecto 
                            Los Pelambres. Fue responsable
                        </p>
                        <a class="card__button" href="">Ver más...</a>
                    </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/woman01.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Ángel Trujillo López</h5>
                        <h5 class="card__ocupation">VICEPRESIDENTE</h5>
                        <p class="card__description">Andritz Certified Site Manager, Andritz Global Site Operations (GSO), Austria. 
                            Certificate Project Management Professional (PMP N°1930249), Project 
                            Management Institute. Magister en gestión e Negocios, 
                            Universidad Adolfo Ibañez, Chile. Ingeniero Mecánico, Universidad 
                            Nacional Experimental Politécnica 
                        </p>
                        <a class="card__button" href="">Ver más...</a>
                   </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/woman02.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">María Soledad López Tapia</h5>
                        <h5 class="card__ocupation">SECRETARIA</h5>
                        <p class="card__description">Ingeniero Comercial de la Universidad Autónoma de Chile; Contador Auditor 
                            de la Universidad Tecnológica Metropolitana; Licenciatura en 
                            Educación de la Universidad Miguel de Cervantes. Especialista en 
                            investigación de delitos económicos, exoficial de la policía de 
                            investigaciones de Chile, Actualmente se 
                        </p>
                        <a class="card__button" href="">Ver más...</a>
                    </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/man.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Felipe Oelckers Aljaro</h5>
                        <h5 class="card__ocupation">DIRECTOR</h5>
                        <p class="card__description">Ha desarrollado su carrera en Chile, Alemania, México, Estados Unidos, 
                            Ecuador, Israel, India y España. Empresario. Ph.D. en Competitividad, 
                            Innovación y Emprendimiento Deusto Business School, País Vasco, España. 
                            MBA de EGADE Business School del Tecnológico de Monterrey, Campus  
                        </p>
                        <a class="card__button" href="">Ver más...</a>
                    </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/man.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Fernando Marcelo Aguiar Rosales</h5>
                        <h5 class="card__ocupation">DIRECTOR</h5>
                        <p class="card__description">Ingeniero Civil Químico de la Pontificia Universidad Católica de Valparaíso y 
                            Master of Business Administration de la Universidad Adolfo Ibañez. 
                            Ha desarrollado su carrera profesional en la gran minería del cobre 
                            principalmente en las áreas de planificación y operaciones mineras.  
                        </p>
                        <a class="card__button" href="">Ver más...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gerencia">
            <h1 class="gerencia__titulo titulo">Gerencia</h1>
            <div class="gerencia__cards cards">
                <div class="gerencia__card card">
                    <img class="gerencia__card__img card__img" src="{{asset('img/man.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="gerencia__card__name card__name">César Mendoza - CEO</h5>
                        <h5 class="gerencia__card__ocupation card__ocupation">Ingeniero Comercial</h5>
                        <p class="gerencia__card__description card__description">Creador modelo de negocios SUDMedica</p>
                    </div>
                </div>
                <div class="gerencia__card card">
                    <img class="gerencia__card__img card__img" src="{{asset('img/woman02.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="gerencia__card__name card__name">Mauricio Cortés GERENTE DE OPERACIONES</h5>
                        <h5 class="gerencia__card__ocupation card__ocupation">Director Médico</h5>
                        <p class="gerencia__card__description card__description">Médico de la Universidad de Chile, Especialidad en Cirugía en la 
                            Universidad de Valparaíso con subespecialidad Cirugía Vascular, 
                            Diplomado Gestión Instituciones de Salud, Universidad de Los Andes; 
                            fue Jefe de Servicio de Cirugía Hospital San Juan de Dios, Los Andes, 
                            Gerente General Fundadores S.A.C., entre
                        </p>
                    </div>
                </div>
                <div class="gerencia__card card">
                    <img class="gerencia__card__img card__img" src="{{asset('img/man.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="gerencia__card__name card__name">lan Couso</h5>
                        <h5 class="gerencia__card__ocupation card__ocupation">GERENTE GENERAL CONSTRUCTORA RED MEDICA</h5>
                        <p class="gerencia__card__description card__description">Ingeniero Civil Industrial PUC, MBA - Masterof Business Administration, 
                            fue Gerente General BBVA Administradora General de Fondos S.A. 
                            Gerente Comercial Shopping Cencosud (Chile), Gerente División Hoteles 
                            para Sudamérica, Cencosud Shopping Centers S.A.; Gerente General 
                            Inmobiliaria Suecia, Director Inmobiliario empresas Manfred Paulmann, entre entre otros.
                        </p>
                    </div>
                </div>
            <div class="gerencia__card card">
                <img class="gerencia__card__img card__img" src="{{asset('img/woman01.jpg')}}" alt="">
                <div class="card__info">
                    <h5 class="gerencia__card__name card__name">Pablo Ribbeck</h5>
                    <h5 class="gerencia__card__ocupation card__ocupation">GERENTE DE FINANZAS</h5>
                    <p class="gerencia__card__description card__description">Director Médico
                        fue Gerente General BBVA Administradora General de Fondos S.A. 
                        Gerente Comercial Shopping Cencosud (Chile), Gerente División Hoteles 
                        para Sudamérica, Cencosud Shopping Centers S.A.; Gerente General 
                        Inmobiliaria Suecia, Director Inmobiliario empresas Manfred Paulmann, entre entre otros.
                    </p>
                </div>
            </div>
        </div>
        <div class="cards__details">
            <p>Él equipo está integrado por ingenieros industriales, ingenieros comerciales, 
                médicos, arquitectos, entre otros. La compañía cuenta con estudios de mercado
                para construir en Chile y algunos países de América.Aunque Sudmédica está en 
                su etapa de estudio y proyecto, ya está materializando un primer logro 
                en él centro de la Región de Valparaíso, en la ciudad de Quillota. 
                Se espera que esta clínica tendrá la categoría de mediana alta y alta 
                complejidad, además, al momento de su apertura, se espera que tenga la mayor 
                cantidad de médicos de planta de la región.Los médicos son accionistas de 
                Sudmédica y además dueños de sus consultas. Las consultas sé vendieron 
                por especialidades. El edificio cuenta con 73 consultas médicas , 
                7 quirófanos imagenología completa, hospitalización, laboratorio y 
                toma de muestra.
            </p>
        </div>
        <div class="carrusel__container">
            <img src="{{asset('img/clinica01.webp')}}" alt="" class="carrusel__img">
        </div>
        <div class="details__edificio">
            <ul>
                <li>Edificio de 6 pisos.</li>
                <li>Médicos y profesionales de la salud de distintas especialidades dueños de sus consultas.</li>
                <li>SUDMedica S.A. realiza las prestaciones que los médicos derivan.</li>
                <li>Estacionamiento para pacientes.</li>
                <li>Todos nuestros profesionales del área se encuentran inscritos en la Superintendencia de Salud.</li>
                <li>Estándares de alta calidad.</li>
            </ul>
        </div>
        <picture class="carrusel__container">
            <img src="{{asset('img/mapa01.jpg')}}" alt="" class="carrusel__img">
        </picture>
        <div class="details__ubicacion">
            <p>La clínica tendrá 3 accesos y vías de circulación expeditas. A 300 metros de 
                la Avenida 21 de Mayo donde transita la mayor parte de la locomoción 
                colectiva. A 350 metros del terminal de buses de Quillota para pacientes de 
                otras ciudades. A 600 metros de autopista. A 
                8 minutos del Hospital Bi provincial. 
            </p>
        </div>
    </div>
</div>
    @include("snipets.contacto")
</body>
</html>