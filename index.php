<!DOCTYPE html>
<html lang="es">
<head>
 <!--
 <base href="/algun_directorio/">
 -->
 <meta charset="utf-8" />
 <meta http-equiv="x-ua-compatible" content="ie=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="icon" href="img/favicon.ico">
 <link rel="stylesheet" href="css/base.css">
 <title>Sistema control de asistencias</title>
 </head>
<body>
<header>
 <nav class="topnav" id="myTopnav">
  <a href="/" class="toplogo"><img src="img/tsj.svg" height="60"
    alt="Tecnológico Superior de Jalisco" tabindex="0"></a>
  <a href="/" class="active">Inicio</a>
  <a href="/" >Uno</a>
  <a href="/" >Dos</a>
  <a href="javascript:void(0);" class="icon" onclick="menuHamburguesa()">&#x2630;</a>
 </nav>
</header>

<script>
function menuHamburguesa() {
 var x = document.getElementById("myTopnav");
 if (x.className === "topnav") { x.className += " responsive";
 } else { x.className = "topnav"; }
}
</script>
</body>
</html>
<!-- vi: set shiftwidth=2 tabstop=2 expandtab: -->
