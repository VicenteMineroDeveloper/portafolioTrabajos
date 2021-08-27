<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/generales.css"/>
    <link rel="stylesheet" href="./css/header.css"/>
    <link rel="stylesheet" href="./css/acercaDe.css"/>
    <link rel="stylesheet" href="./css/habilidades.css"/>
    <link rel="stylesheet" href="./css/trabajos.css"/>
    <link rel="stylesheet" href="./css/contacto.css"/>
    <link rel="stylesheet" href="./css/footer.css"/>
    <script src="https://kit.fontawesome.com/735530455d.js" crossorigin="anonymous"></script>
    <title>Desarrollador Front End - Vicente Minero</title>
</head>

<body>
    <!-- Header -->
    <header id="headerCambiar" class="header">
        <div class="contenedorHeader">
            
            <!-- Navbar de menu -->
            <nav class="navbar" id="navbar">
                <div class="navbar-arriba">
                <div class="noBoton" id="mostrar"><button onclick="mostrarHeader()">Mostrar</button></div>
                <!-- <h2 class="navbar-nombre-oculto" id="navbar-nombre-cambio">Hola, soy Vicente Minero</h2> -->
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                </div>
                <div class="menuDiv menuVisible">
                    <ul class="menu"  id="menuCambio">
                        <a href="#"><li class="lista-menu"><span class="navbar-icono"><i class="fas fa-home"></i></span>Inicio</li></a>
                        <a href="#"><li class="lista-menu"><span class="navbar-icono"><i class="fas fa-info-circle"></i></span>Acerca de</li></a>
                        <a href="#"><li class="lista-menu"><span class="navbar-icono"><i class="fas fa-briefcase"></i></span>Trabajos</li></a>
                        <a href="#"><li class="lista-menu"><span class="navbar-icono"><i class="far fa-address-book"></i></span>Contacto</li></a>
                </ul>
                </div>
            </nav>

            <!-- Apartado de Presentacion -->
            <div class="presentacion" id="presentacionCambiar">
                <h2 class="nombre">Hola, soy Vicente Minero</h2>
                <h1>Desarrollador Front End</h1>
                <p>Egresado de la carrera de Ingeniería en Informática, apasionado por el desarrollo y diseño web</p>
                <!-- <div class="ocultar"><button id="ocultar" onclick="ocultarHeader()">Ocultar</button></div> -->
            </div>
        </div>
    </header>

        <!-- Div Contenedor general -->
        <div class="contenedor">

            <!-- Sección de Acerca De -->
            <button class="boton-acercaDe" id="boton-acercaDeCambio">
            <section class="acercaDe" id="acercaDeCambio">
                
                <div class="titulo-acercaDe"><h2>Acerca de mí</h2></div>
                <div class="descripcion-acercaDe"><p>Egresado de <b>Ingeniería en Informática</b> desarrollado en el área web con conocimientos en la parte de <b>Back end</b> así como en el desarollo de <b>Bases de Datos</b> con una gran pasión por el desarrollo <b>Front end</b>. <span class="modoNoche">(click on me)</span></p></div>
                <!-- Egresado de ingeniería en informática desarrollado en el  área Web, con conocimientos intermedios de ciertos lenguajes de programación para front end y diseño de UI -->
                
            </section>
        </button>
        </div>
            <!-- Seccion de Habilidades -->
            <section class="habilidades">
                <!-- <article class="titulo-habilidades"><h3>Habilidades</h3></article> -->
                <article class="imagenes-habilidades">
                    <div class="habilidad" id="uno"><img src="./imagenes/habilidades/HTML.png" alt="HTML"/></div>
                    <div class="habilidad" id="dos"><img src="./imagenes/habilidades/CSS.png" alt="CSS"/></div>
                    <div class="habilidad" id="tres"><img src="./imagenes/habilidades/SASS.png" alt="SASS"/></div>
                    <div class="habilidad" id="cuatro"><img src="./imagenes/habilidades/Bootstrap.png" alt="Bootstrap"/></div>
                    <div class="habilidad" id="cinco"><img src="./imagenes/habilidades/JavaScript.png" alt="JavaScript"/></div>
                    <div class="habilidad" id="seis"><img src="./imagenes/habilidades/jQuery.png" alt="jQuery"/></div>
                </article>
            </section>
            
            <!-- Sección de Trabajos -->
            <section class="trabajosPropios">
                <article class="titulo-trabajos"><div class="titulo-trabajos2"><h3>Trabajos</h3></div></article>
                <!-- Trabajo 1 -->
                    <div class="trabajo">
                        <div class="imagen-trabajo"><a href="./trabajos/layout1/index.html"><img src="./imagenes/trabajos/1.jpg"/></a></div>
                        <div class="descripcion-trabajo">
                            <div class="descripcion-titulo-trabajo"><p><a href="./trabajos/layout1/index.html">Layout</a></p></div>
                            <div class="descripcion-lenguajes-trabajo"><p>HTML-CSS-Flexbox</p></div>
                        </div>
                    </div>
                <!-- Trabajo 2 -->
                    <div class="trabajo">
                        <div class="imagen-trabajo"><a href="./trabajos/restaurante/index.html"><img src="./imagenes/trabajos/2.jpg"/></a></div>
                        <div class="descripcion-trabajo">
                            <div class="descripcion-titulo-trabajo"><p><a href="./trabajos/restaurante/index.html">Restaurante</a></p></div>
                            <div class="descripcion-lenguajes-trabajo"><p>HTML-CSS-JS-jQuery</p></div>
                        </div>
                    </div>
                <!-- Trabajo 3 -->
                    <div class="trabajo">
                        <div class="imagen-trabajo"><a href="#"><img src="./imagenes/trabajos/3.jpg"/></a></div>
                        <div class="descripcion-trabajo">
                            <div class="descripcion-titulo-trabajo"><p><a href="#">Trabajo 3</a></p></div>
                            <div class="descripcion-lenguajes-trabajo"><p>HTML-CSS-SASS</p></div>
                        </div>
                    </div>
                <!-- Trabajo 4 -->
                    <div class="trabajo">
                        <div class="imagen-trabajo"><a href="#"><img src="./imagenes/trabajos/4.jpg"/></a></div><div class="descripcion-trabajo"></div>
                        <div class="descripcion-trabajo">
                            <div class="descripcion-titulo-trabajo"><p><a href="#">Trabajo 4</a></p></div>
                            <div class="descripcion-lenguajes-trabajo"><p>HTML-CSS-Bootstrap</p></div>
                        </div>
                    </div>
            </section>

            <!-- Apartado de Contacto -->
            <section class="contacto">
                <article class="titulo-contacto"><h3>Contacto</h3></article>
               <form method="POST" class="formulario">
                <div class="informacion-contacto">
                    <div class="nombre-contacto">
                        <label for="nombre" class="label">Nombre</label>
                        <br/>
                        <input type="text" id="nombre" name="nombre" required="required" maxlength="40">
                    </div>
                    <div class="correo-contacto">
                        <label for="correo" class="label">Correo</label>
                        <br/>
                        <input type="email" name="correo" id="correo" required="required" maxlength="40">
                    </div>
                </div>
                <div class="mensaje-contacto">
                    <label for="mensaje" class="label">Mensaje</label>
                    </br/>
                    <textarea name="mensaje" id="mensaje" rows="10" required="required" maxlength="620" minlength="30"></textarea>
                </div>
                <div class="boton">
                    <button class="enviar" name="enviar">Enviar Correo</button>
                </div>
              </form>
            </section>

            <footer>
                <div class="redes-sociales">
                    <div class="redes-sociales-div"><a href="" class="icono"><i class="fab fa-linkedin"></i></a></div>
                    <div class="redes-sociales-div"><a href="" class="icono"><i class="fab fa-facebook-square"></i></a></div>
                    <div class="redes-sociales-div"><a href="" class="icono"><i class="fab fa-instagram"></i></a></div>
                    <div class="redes-sociales-div"><a href="" class="icono"><i class="fab fa-github-square"></i></a></div>
                </div>
                <div class="navbar-footer">
                    <ul>
                        <li class="menu-footer"><a href="#">Inicio</a></li>
                        <i class="fas fa-circle"></i>
                        <li class="menu-footer"><a href="#">Acerca de</a></li>
                        <i class="fas fa-circle"></i>
                        <li class="menu-footer"><a href="#">Trabajos</a></li>
                        <i class="fas fa-circle"></i>
                        <li class="menu-footer"><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    <script src="js/header.js"></script>
    <script src="js/acercaDe.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>