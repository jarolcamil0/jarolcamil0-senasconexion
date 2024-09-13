<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <nav>
    <div class="container nav-container">
      <div class="logo">
        <img src="imagenes/logo.png" alt="">
      </div>
      <div class="serch-bar">
        <i class="bi bi-search search-icon"></i>
        <input type="search" placeholder="Lugar">
      </div>
      <div class="circular--portrait">
        <img src="imagenes/jarol.png" class="user-pic" onclick="toggleMenu()" >
      </div>
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="imagenes/jarol.png">
            <h2>Jarol Camilo</h2>
          </div>
          <hr>
          <a href="" class="sub-menu-link">
            <i class="bi bi-person-fill-gear icones"></i>
            <p>Editor Profile</p>
            <span>></span>
          </a>
          <a href="" class="sub-menu-link">
            <i class="bi bi-gear-fill icones"></i>
            <p>Configuración</p>
            <span>></span>
          </a>
          <a href="" class="sub-menu-link">
            <i class="bi bi-question-octagon-fill icones"></i>
            <p>Ayuda</p>
            <span>></span>
          </a>
          <a href="" class="sub-menu-link">
            <i class="bi bi-moon-stars-fill icones"></i>
            <p>Modo oscuro</p>
            <span>></span>
          </a>
          <a href="" class="sub-menu-link">
            <i class="bi bi-door-open-fill icones"></i>
            <p>Cerrar sesion</p>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <script src="js/menu.js"></script>
</body>
</html>