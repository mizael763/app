<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
    <script>
        function actualizarContador() {
            var textarea = document.getElementById('descripcion');
            var contador = document.getElementById('contador');
            if (textarea && contador) {
                var caracteresRestantes = textarea.maxLength - textarea.value.length;
                contador.textContent = caracteresRestantes + "/300";
            }  
        }
        function mostrarImagen() {
        var input = document.getElementById('imagenInput');
        var vistaPrevia = document.getElementById('vistaPreviaImagen');

        if (input.files && input.files[0]) {
            var lector = new FileReader();

            lector.onload = function (e) {
                vistaPrevia.innerHTML = '<img src="' + e.target.result + '" alt="Vista Previa de la Imagen" style="position: relative; max-width: 100%; max-height: 300px;">';
            };

            lector.readAsDataURL(input.files[0]);
        }
    }
    </script>
</head>
<body class="body">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div class="container">
        <nav>
            <ul>
                <li id="iniciolink"><i class="fas fa-home"></i> Inicio</li>
                <li><i class="fas fa-cogs"></i> Configuracion</li>
                <li>
                    <i class="fas fa-shopping-cart"></i> Productos
                    <div class="container1">
                        <ul>                                            
                            <li><a href="#" id="lista"><i class="fas fa-circle fa-xs"></i> Lista de productos</a></li><hr>
                            <li><a href="#" id="stocklink"><i class="fas fa-circle fa-xs"></i> Stock</a></li><hr>
                            <li><a href="#" id="formu"><i class="fas fa-circle fa-xs"></i> Subir Producto</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <i class="fas fa-box"></i> Contable
                    <div class="container1">
                        <ul>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Vaucher</a></li><hr>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Operaciones</a></li><hr>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Estado Cuenta</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                <i class="fas fa-sign-in-alt"></i> Ingresos
                    <div class="container1">
                        <ul>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Reportes Venta</a></li><hr>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Arque/Caja</a></li><hr>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Venta</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                <i class="fas fa-sign-out-alt"></i> Egresos
                    <div class="container1">
                        <ul>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i>Reporte Compras</a></li><hr>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Arqueo</a></li><hr>
                            <li><a href="#"><i class="fas fa-circle fa-xs"></i> Compras</a></li>
                        </ul>
                    </div>
                </li>
                <li><i class="fas fa-envelope"></i> Reporte</li>
                <li><i class="fas fa-phone fa-flip-horizontal"></i>  Contactos</li>
                @if (Auth::check())
                    <li>
                        <i class="fas fa-user"></i>
                        {{ Auth::user()->name }}
                        <div class="container1">
                            <ul>
                                <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li>Login</li>
                @endif
            </ul>
        </nav>
    </div>
    <div class="container_P" id="inicio" style="display: block;">
        <div class="formu">
            <h1> Inicio</h1><hr>
            <p>Para poder mostrarse correctamente, esta página web necesita los datos que escribiste anteriormente. Puedes enviar esos datos otra vez pero eso hará que la página repita todas las acciones anteriores. Pulsa Recargar para enviar los datos y mostrar la página.</p>
        </div>    
    </div> 
    <div id="productos" style="display:none;">
        <div class="container_P">
            <div class="container_Pa">
            <div class="container_P1">
                <nav>
                    <ul>
                        <li>producto 1</li>
                        <li>producto 2</li>
                        <li>producto 3</li>
                        <li>producto 4</li>
                        <li>producto 5</li>
                    </ul>
                </nav>
            </div>
            </div>
            <div class="container_P2">
            <table>
                <?php
                $productos = App\Models\Producto::all(); // Asegúrate de ajustar el espacio de nombres del modelo según tu aplicación

                $count = 0;
                foreach ($productos as $producto) {
                    if ($count % 2 == 0) {
                        echo "<tr>";
                    }
                ?>
                    <td>
                        <div class="container_3">
                            <div><img src="{{ asset('imagen_prod/' . $producto->imagen) }}" class="img"></div>
                            <div>
                                <label for="">{{ $producto->nombre_prod }}</label>
                                <p>{{ $producto->descripcion }}</p>
                                <label for="">Precio: ${{ $producto->precio_prod }}</label>
                            </div>
                        </div>
                    </td>
                <?php
                    if ($count % 2 == 1 || $count == count($productos) - 1) {
                        echo "</tr>";
                    }
                    $count++;
                }
                ?>
            </table>
            </div>
        </div>
    </div>
    <div id="stock" style="display:none;">
        <div class="container_P">
            <h1> Stock</h1><hr>
        </div>
    </div>

    <div  id="formulario" style="display:none;">
        <div class="formu">
            <h1>Subir Producto</h1><hr>
                    <form action="{{ route('guardar-producto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <table>
                        <tr>
                            <td style="display: grid; justify-content: center;">
                                <label for="nombre_prod">Nombre del Producto:</label>
                                <input type="text" name="nombre_prod" required><hr>

                                <label for="categoria_prod">Categoría:</label>
                                <input type="text" name="categoria_prod" required><hr>
                                
                                <div class="descripcion-container">
                                    <label for="descripcion">Descripción:</label>
                                    <textarea name="descripcion" id="descripcion" maxlength="300" oninput="actualizarContador()" class="textarea" required></textarea>
                                    <p id="contador" class="contador">300/300</p><hr>
                                </div>

                                <label for="precio_prod">Precio:</label>
                                <input type="number" name="precio_prod" required step="0.01">
                            </td>
                            <td>
                                <div style="display: grid;">
                                    <label for="imagen">Imagen:</label><hr>
                                    <div id="vistaPreviaImagen"></div><hr>
                                    <input type="file" name="imagen" id="imagenInput" onchange="mostrarImagen()">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <hr>
                                <button type="submit" style="width:20%;">Guardar Producto</button>
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
    </div>
    <script src="{{ asset('js/sub_menu1.js') }}"></script>
 </body>
</html>