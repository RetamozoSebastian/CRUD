<!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
 </head>
 <body>
    <?php
   // $usuario = $_GET['Usuario'];
     ?>   
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Cerrar</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
 <header>
    <h1>Usuarios</h1>
  </header>

  <main>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio incidunt laboriosam, facere beatae odio vero, natus perferendis eaque aliquid consectetur vel esse voluptate iste consequuntur possimus repellat magni officia ea.</p>
  </main>

  <footer>
    <p>© 2025 - Todos los derechos reservados</p>
  </footer>

 
 </body>
 </html>
 
 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Layout con Padding Responsive</title>

</head>
<body>

<style>
   body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  header, main, footer {
    padding: 16px; /* Padding por defecto */
    transition: padding 0.3s ease;
  }

  header {
    background-color: #1976d2;
    color: white;
  }

  main {
    background-color: #e3f2fd;
    min-height: 300px;
  }

  footer {
    background-color: #0d47a1;
    color: white;
    text-align: center;
  }

  /* Padding responsive */
  @media (min-width: 600px) {
    header, main, footer {
      padding: 32px;
    }
  }

  @media (min-width: 900px) {
    header, main, footer {
      padding: 48px;
    }
  }
</style>
