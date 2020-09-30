<?php

echo "<header class='mobile-header' id='hero'>
    
    <nav class='mobileNavbar navbar navbar-expand-lg'>
        <!-- navbar-light bg-light -->
        <a class='navbar-brand navLogo' href='/'>RYZEN</a>
        
        <span class='iconos' id='iconoMb'>
            <i class='fas fa-search' id='icon-search-mb'></i>
        </span>
        
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <i class='fas fa-bars'></i>
        </button>

        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-items active'>
                    <i class='fas fa-home'></i><a class='nav-link' href='/'>HOME <span class='sr-only'>(current)</span></a>
                </li>
                <% if(locals.user){ %>
                <li class='nav-items'>
                    <i class='fas fa-user'></i><a class='nav-link userLogged' href='/perfil'>¡Hola <%= locals.user.userName %>!</a>
                </li>
                <li class='nav-items'>
                    <i class='fas fa-times-circle'></i><a class='nav-link' href='/logout' style='color: #ff0d0d;'>LOGOUT</a>
                </li>
                <% } else { %>
                <li class='nav-items'>
                    <i class='fas fa-sign-in-alt'></i><a class='nav-link' href='/login'>LOGIN</a>
                </li>
                <li class='nav-items'>
                    <i class='fas fa-user-plus'></i><a class='nav-link' href='/registro'>REGISTRO</a>
                </li>
                <% } %>
                <li class='nav-items'>
                    <i class='fas fa-vr-cardboard'></i><a class='nav-link' href='/productos/visores'>VISORES</a>
                </li>
                <li class='nav-items'>
                    <i class='fas fa-gamepad'></i><a class='nav-link' href='/productos/aplicaciones'>APPS Y JUEGOS</a>
                </li>
                <li class='nav-items'>
                    <i class='fas fa-briefcase'></i><a class='nav-link' href='/quienes-somos'> QUIÉNES SOMOS</a>
                </li>
                <li class='nav-items'>
                    <i class='fas fa-shopping-cart'></i><a class='nav-link' href='/carrito'> CARRITO</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div id='container-search-mb'>
    <input type='text' id='input-search-mb' placeholder='¿Qué estás buscando?'>
</div>

<div id='box-search-mb'>
    <ul>
        <li><a href='/productos/visores'><span class='iconos'><i class='fas fa-search'></i></span>Visores</a></li>
        <li><a href='/productos/aplicaciones'><span class='iconos'><i class='fas fa-search'></i></span>Aplicaciones</a></li>
        <li><a href='/productos/aplicaciones'><span class='iconos'><i class='fas fa-search'></i></span>Juegos</a></li>
        <li><a href='/carrito'><span class='iconos'><i class='fas fa-search'></i></span>Carrito</a></li>
        <li><a href='/login'><span class='iconos'><i class='fas fa-search'></i></span>Login</a></li>
        <li><a href='/registro'><span class='iconos'><i class='fas fa-search'></i></span>Registro</a></li>
        <li><a href='/perfil'><span class='iconos'><i class='fas fa-search'></i></span>Perfil</a></li>
        <li><a href='/quienes-somos'><span class='iconos'><i class='fas fa-search'></i></span>Quienes Somos</a></li>
        <li><a href='/productos/1'><span class='iconos'><i class='fas fa-search'></i></span>Acer OJO 500</a></li>
        <li><a href='/productos/2'><span class='iconos'><i class='fas fa-search'></i></span>Oculus Rift S</a></li>
        <li><a href='/productos/3'><span class='iconos'><i class='fas fa-search'></i></span>Samsung Gear VR</a></li>
        <li><a href='/productos/4'><span class='iconos'><i class='fas fa-search'></i></span>Joystick Oculus Touch</a></li>
        <li><a href='/productos/5'><span class='iconos'><i class='fas fa-search'></i></span>Astro Bot</a></li>
    </ul>
</div>

<div id='cover-container-search-mb'>

</div>"

?>