<?php

include("bdata.php");

if (isset($_POST['register'])) {
  if (
    strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['apellido']) >= 1 &&
    strlen($_POST['edad']) >= 1 &&
    strlen($_POST['sexo']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['contraseña']) >= 1
  ) {

    $name = trim($_POST['nombre']);
    $lastname = trim($_POST['apellido']);
    $age =  trim($_POST['edad']);
    $sex =  trim($_POST['sexo']);
    $email =  trim($_POST['correo']);
    $password =  trim($_POST['contraseña']);
    $consulta = "INSERT INTO datos(nombre, apellido, edad, sexo, correo, contraseña) VALUES ('$name', '$lastname', '$age', '$sex', '$email', '$password')";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
?>
      <h3 class="ok">¡Te has inscrito correctamente!</h3>
    <?php
    } else {
    ?>
      <h3 class="bad">¡Ups ha ocurrido un error!</h3>
    <?php
    }
  } else {
    ?>
    <h3 class="bad">¡Por favor complete los campos!</h3>
<?php
  }
}
?>