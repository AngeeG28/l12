
@extends('layouts.app')
@section('content')
    <div class="heroe">

            <h1>Bienvenidos UNISARC 4.6.3</h1>
            <h2>Este es su sistema de inventario</h2>
            <p>Elige la categoría de libros que más te guste</p>

        </div>

    <!-- CONTENT -->

    <section class="container">
        <div class="row justify-content-center g-4">
        <h2 class="text-center mb-4">Categorías</h2>

        <!-- Card Categoria de Terror -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0" style="background-color:#fdfdfd; border-radius:10px;">
                <img src="<?= ('imagenes/terror.png') ?>" 
                    class="card-img-top" 
                    alt="Libro de Terror"
                    style="height:250px; object-fit:cover; border-radius:10px 10px 0 0;">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">
                        <i class="bi bi-book-half"></i> Terror
                    </h5>
                    <p class="card-text text-muted" style="font-size:0.95rem; line-height:1.4;">
                        ¡Prepárate para adentrarte en la oscuridad! Nuestra categoría de libros de terror te sumergirá en atmósferas inquietantes, misterios sobrenaturales y horrores psicológicos que exploran tus miedos más profundos.
                    </p>
                    <a href="{{ url('/productos') }}" class="btn btn-outline-dark w-100">Ver Inventario</a>
                </div>
            </div>
        </div>

        <!-- Card Categoria de Fantasía -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0" style="background-color:#fdfdfd;">
                <img src="<?= ('imagenes/fantasia.png') ?>" 
                    class="card-img-top" 
                    alt="Libro de Fantasía"
                    style="height:250px; object-fit:cover; border-radius:10px 10px 0 0;">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">
                        <i class="bi bi-stars""></i> Fantasía
                    </h5>
                    <p class="card-text text-muted" style="font-size:0.95rem; line-height:1.4;">
                        ¡Bienvenido al reino de lo imposible! Nuestra categoría de fantasía te invita a escapar de lo cotidiano y sumergirte en universos donde la magia fluye libre y criaturas míticas desafían la razón.
                    </p>
                    <a href="{{ url('/productos') }}" class="btn btn-outline-dark w-100">Ver Productos</a>
                </div>
            </div>
        </div>
    </div>
    </section>


    <script {csp-script-nonce}>
        document.getElementById("menuToggle").addEventListener('click', toggleMenu);
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>
@endsection


<style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding-top: 1.75rem;
        }
        .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
            
        }
        
        
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>