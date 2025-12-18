<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventario de productos</title>

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <title>Book Store</title>

    <style>

      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body {
        background-color: #f9f7f4; 
        font-family: 'Georgia', serif; 
        min-height: 100vh;
      }

      /* Navbar */
      .navbar {
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        background-color: #fff !important;
      }

      .navbar-brand {
        font-weight: bold;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        color: #02354bff; 
      }

      .navbar-brand i {
        font-size: 1.8rem;
        margin-right: 8px;
        color: #02415dff;
      }
    
      .navbar-nav .nav-item .nav-link {
        font-weight: 600;
        color: #343a40 !important;
        padding: 8px 18px;
        margin-left: 10px;
        border-radius: 20px;
        transition: all 0.3s ease;
        position: relative;
      }
      .navbar-nav .nav-item .nav-link:hover {
        background-color: #0280b6ff;
        color: #fff !important;
        box-shadow: 0 3px 8px rgba(0,0,0,0.2);
      }


      .nav-link {
        font-weight: 600;
        color: #343a40 !important;
        transition: color 0.3s ease;
      }

      .nav-link:hover {
        color: #0280b6ff !important;
      }
      
      /* Btn Ver */
      .btn-primary {
        background-color: #02354bff;
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #0280b6ff;
        transform: scale(1.05);
      }

      /* Btn Eliminar */
      .btn-danger {
        background-color: #e94e4e;
        border-color: #c0392b;
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
      }

      .btn-danger:hover {
        background-color: #c0392b;
        border-color: #962d22;
        transform: scale(1.05);
      }

      /* Ajustes generales */
      .btn-sm {
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 0.85rem;
      }
    </style>

    </head>
    <body>
            <!-- Menú -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            
            <!-- Logo con icono de libro -->
            <a class="navbar-brand" href="http://localhost/ejercicio_I/public/" target="_blank">
            <i class="bi bi-book-half" style="color: #002230ff;"></i> Book Store
            </a>

            <!-- Menú derecha -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" 
                    href="http://localhost/ejercicio_I/public/">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="productos">Productos</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>
            
            @yield('content')
    
      <footer style="background-color: #02354bff;">

        <div class="footer" style="text-align:center; align-content: center; margin-top: 40px; border-top:  1px solid #b9b9b9ff; height: 150px; color:white;">
          © 2025 CodeIgniter Foundation. Frameworks de programación UNISARC.
        </div>
        
      </footer>
   
    </body>
</html>
