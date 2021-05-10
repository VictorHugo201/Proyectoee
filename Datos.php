<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">


  <title>Document</title>
</head>

<body>

  <p>
  <h1> Youschooline</h1>
  </p>
  <form method="POST">


    <section class="estilos-registro">
      <h2 style="text-align: center;">Formulario de registro</h2>

      <input class="control" name="nombre" type="text" placeholder="digite su nombre">
      <br></br>
      <input class="control" name="apellido" type="text" placeholder="digite su apellido">
      <br></br>
      <input class="control" name="edad" type="number" placeholder="digite su edad">
      <br></br>
      <select style="width: 280px; height: 40px;" class="control" name="sexo" type="text" placeholder="sexo">
        <option placeholder="sexo" value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
      </select>


      <br></br>
      <input class="control" name="correo" type="text" placeholder="digite su correo electronico">
      <br></br>
      <input class="control" name="contraseña" type="password" placeholder="digite una contraseña">
      <br></br>
      <input class="control" name="contraseña" type="password" placeholder="confirme su contraseña">
      <br></br>


      <p style="text-align: center;"><button class="botons" type="submit" name="register">Registrarse</button>
      </p>

  </form>
  <?php
  include("rogo.php");
  ?>
</body>

</html>