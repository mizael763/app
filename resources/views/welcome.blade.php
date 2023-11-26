<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles_menu.css') }}">
        <!-- Styles -->
        <style>
            .login{
                color: #5e573c;
                list-style: none;
                text-decoration: none;
                padding-left: 26px;
            }

            .login:hover{
                color: #ffeba7;
            }
            nav{
                margin: 15px auto;
            }
            .ul{
                justify-content: end;
            }

            .ul li{
                margin: 10px 30px;
            }
            .div1{
                width: 80%;
                height: 80%;
                margin: auto;
                display: flex;
            }
            .sub_div1   {
                width: 47%;
                height: 95%;
                margin: auto;
                background: black;
                border-radius:50px;
                text-align:center;
            }
            p{
                padding: 13px 33px;
            }
            hr{
                width: 90%;
            }
        </style>
        
    </head>
    <body >
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <nav>
            <ul class="ul">
                <?php 
                    for($i=0;$i<10;$i++){
                        echo '<li><a><i class="fas fa-circle fa-xs"></i></a></li>';
                    };             
                ?>
                <li>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="login">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="login">Iniciar Sesion</a>
                            @if (Route::has('register'))
                                <div class="container1">
                                    <ul>                                            
                                        <li><a href="{{ route('register') }}" id="lista"><i class="fas fa-circle fa-xs"></i>Registrase</a></li>
                                    </ul>
                                </div>
                            @endif
                        @endauth
                    @endif  
                </li>
            </ul>
        </nav>
    <div class="div1">
        <div class="sub_div1">
            <p>TITULO_NOMBRE</p><hr>
            <p>PROPIEDADES</p>
            <P>- propiedades 1</P>
            <P>- propiedades 1</P>
            <P>- propiedades 1</P>
            <P>- propiedades 1</P>
            <P>- propiedades 1</P><hr>
            <p>DESCRIPCION</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus odio cupiditate ullam eaque libero porro deleniti magni accusamus nesciunt. Officiis esse eligendi aperiam excepturi laudantium ullam deleniti pariatur cupiditate amet.</p>
        </div>
        <div class="sub_div1">
            <p>.</p><hr><p>.</p>
            <div style="position:relative;">
                <img src="{{ asset('imagen_prod/1700770513.png')}}" alt="">
            </div>
            <p>.</p><hr>
        </div>
    </div>
    </body>
</html>
