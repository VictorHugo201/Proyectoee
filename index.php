<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/normalize.css">
    <title>Youschool</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>YOU SCHOOLINE</h1>
  <form method="POST">
  


    <section class="estilos-registro">
      <h2 style="text-align: center;">Formulario de registro</h2>

      <input class="campo" name="nombre" type="text" placeholder="digite su nombre">
      <br></br>
      <input class="campo" name="apellido" type="text" placeholder="digite su apellido">
      <br></br>
      <input class="campo" name="edad" type="number" placeholder="digite su edad">
      <br></br>
      <select style="width: 280px; height: 40px;" class="campo" name="sexo" type="text" placeholder="sexo">
        <option placeholder="sexo" value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
      </select>


      <br></br>
      <input class="campo" name="correo" type="text" placeholder="digite su correo electronico">
      <br></br>
      <input class="campo" name="contraseña" type="password" placeholder="digite una contraseña">
      <br></br>
      <input class="campo" name="contraseña" type="password" placeholder="confirme su contraseña">
      <br></br>


      <p style="text-align: center;"><button class="botons" type="submit" name="register">Registrarse</button>
      </p>

  </form>
  <?php
  include("rogo.php");
  ?>
</body>

</html>