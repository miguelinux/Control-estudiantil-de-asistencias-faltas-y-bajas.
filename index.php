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
 <title>Sistema de control de asistencias</title>
<style>

form {
  width: 500px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(10px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  color: white;
  border-radius: 10px;
  padding: 30px 40px;
  display:flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

#contenido2 {
 position: absolute;
 top: 50%;
 left: 50%;
 margin-right: -50%;
 transform: translate(-50%, -50%);
}

#contenido {
 padding-top: 25px;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 60%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
  color: black;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 500px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  form {
     width: 90%;
  }
}
</style>
 </head>
<body>
<header>
<?php include "inc/menu-header.php";?>
</header>

<div id="contenido">
<form action="/action_page.php" method="post">
<h1>Sistema de control de asistencia</h1>
 <div class="imgcontainer">
  <img src="img/tsj-logo.png" alt="Tecnológico Superior de Jalisco" class="avatar">
 </div>

<div class="container">
 <label for="uname"><b>Usuario</b></label>
 <input type="text" placeholder="Ingresa tu correo" name="uname" required>

 <label for="psw"><b>Password</b></label>
 <input type="password" placeholder="Ingresa tu password" name="psw" required>

 <button type="submit">Entrar</button>
 <label>
 <input type="checkbox" checked="checked" name="remember"> Remember me
 </label>
</div>

<div class="container" style="background-color:#f1f1f1">
 <button type="button" class="cancelbtn">Cancelar</button>
 <span class="psw">Forgot <a href="#">password?</a></span>
</div>
</form>
</div>

<?php include "inc/menu-footer.php";?>
</body>
</html>
<!-- vi: set shiftwidth=2 tabstop=2 expandtab: -->
