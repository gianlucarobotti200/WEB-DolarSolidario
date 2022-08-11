<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dólar "solidario"</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/162fed51d8.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav>
      <div class="navbar">
        <div class="container nav-container">
          <input class="checkbox" type="checkbox" name="" id="" />
          <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
          </div>
          <div class="menu-items">
            <li><a href="index.php">Home</a></li>
            <li><a href="views/cotizaciones.php">Cotización</a></li>
            <li><a href="views/impuestos.php">Impuestos</a></li>
            <li><a href="views/info.php">Más Info</a></li>
            <li><a href="views/sobremi.php">Contacto</a></li>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="flags">
      <img src="img/estados-unidos.png" alt="">
      <i class="fa-solid fa-arrows-rotate"></i>
      <img class="flag" src="img/argentina.png" alt="">
    </section>
    
    <section class="data">
      <span id="cotizacion" class="cotizacion">Dólar Oficial hoy: Cargando...</span>
      <br><a href="views/cotizaciones.php">Ver cotizaciones</a>
      <form name="dolartospend" onsubmit="return false;">
        <select id="moneda">
          <option value="1" type="reset">U$D</option>
          <option value="2" type="reset">AR$</option>
        </select>
        <input class="in-dollar" type="number" step=".01" min="0" id="money" name="money" placeholder="Ingresar dólares" onchange="getDolars()">
      </form>
      
      <div class="lista">
        <span id="pesosinimp">Pesos sin impuesto: $</span>
        <span id="imppais">Impuesto país 30%: $</span>
        <span id="ret">Retención del 45%: $</span>
        <span id="total">Total con impuestos: $</span>
      </div>
    </section>
  </main>

  <footer>
    <p>Todos los derechos reservados a Gianluca Robotti</p>
    <a href="https://github.com/gianlucarobotti200" target="_blank"><i class="fa-brands fa-github"></i></a>
  </footer>
  
  <script src="index.js"></script>
</body>

</html>