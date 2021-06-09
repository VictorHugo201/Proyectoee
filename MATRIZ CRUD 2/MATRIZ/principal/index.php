<?php
require_once 'alumno.entidad.php';
require_once 'alumno.model.php';

// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$alm->__SET('id',              $_REQUEST['id']);
			$alm->__SET('Nombre',          $_REQUEST['Nombre']);
			$alm->__SET('Apellido',        $_REQUEST['Apellido']);
			$alm->__SET('Sexo',            $_REQUEST['Sexo']);
			$alm->__SET('Edad',            $_REQUEST['Edad']);
			$alm->__SET('Correo',          $_REQUEST['Correo']);
			$alm->__SET('Telefono',        $_REQUEST['Telefono']);

			$model->Actualizar($alm);
			header('Location: index.php');
			break;

		case 'registrar':
			$alm->__SET('Nombre',          $_REQUEST['Nombre']);
			$alm->__SET('Apellido',        $_REQUEST['Apellido']);
			$alm->__SET('Sexo',            $_REQUEST['Sexo']);
			$alm->__SET('Edad',            $_REQUEST['Edad']);
			$alm->__SET('Correo',          $_REQUEST['Correo']);
			$alm->__SET('Telefono',        $_REQUEST['Telefono']);

			$model->Registrar($alm);
			header('Location: index.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['id']);
			header('Location: index.php');
			break;

		case 'editar':
			$alm = $model->Obtener($_REQUEST['id']);
			break;
	}
}

?>

<!DOCTYPE html>
<html lang="es" >
	<head>
		<title>MATRIZ CRUD | YOUSCHOOLINE</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="ICON" type="icon/png" href="LOGO.png">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" href="styles.css">
	</head>
    <div class="cuadrado"></div>
        <div class="cuadrado2"></div>
    <body style="padding:15px;background: rgb(40, 36, 85);
            background: linear-gradient(0 deg, rgb(40, 36, 85) 0%, rgb(40, 36, 85) 0%, rgb(40, 36, 85) 100%);">
        <h1 style="position: relative; left: 400px;"><a  style = "text-decoration: None; color: white;"  href="http://localhost/MATRIZ/inicio/inicio.html">MATRIZ CRUD YOUSCHOOLINE
    </a></h1>
        <img style="position: absolute; left: 900px; border-radius: 20px; top: 150px;" width="400" src="img.gif">
 
<div style="position: relative;left: 200px; top: 50px;">
        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:500px; color: white;">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Apellido</th>
                            <td><input type="text" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Sexo</th>
                            <td>
                                <select name="Sexo" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="2" <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?>>Femenino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Edad</th>
                            <td><input type="text" name="Edad" value="<?php echo $alm->__GET('Edad'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Correo</th>
                            <td><input type="text" name="Correo" value="<?php echo $alm->__GET('Correo'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Telefono</th>
                            <td><input type="text" name="Telefono" value="<?php echo $alm->__GET('Telefono'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal" style="background: white;">
                    <thead>
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <th style="text-align:left;">Apellido</th>
                            <th style="text-align:left;">Sexo</th>
                            <th style="text-align:left;">Edad</th>
                            <th style="text-align:left;">Correo</th>
                            <th style="text-align:left;">Telefono</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Nombre'); ?></td>
                            <td><?php echo $r->__GET('Apellido'); ?></td>
                            <td><?php echo $r->__GET('Sexo') == 1 ? 'H' : 'F'; ?></td>
                            <td><?php echo $r->__GET('Edad'); ?></td>
                            <td><?php echo $r->__GET('Correo'); ?></td>
                            <td><?php echo $r->__GET('Telefono'); ?></td>
                            <td>
                                <a class="boton-editar"  href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a class="boton-eliminar" href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                            </td>
                            <a href=""></a>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
</div>
<footer>
    
    <p style="position: relative;top: 210px; left: 600px;">SENA | 2021</p>
</footer>
    </body>
</html>