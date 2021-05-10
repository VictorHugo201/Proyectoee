<?php

    require_once ("3pilaresVista.php");
    
    require_once ("Herencia2.php");

    $Usu = new Usuario ("Juan","Fuentes","tucolegio@gmail.com","Masculino", "dcc6a4s5c", 15151523);
    $arrinforUsuario  = $Usu->GetInfoUsuario();

    print_r('<pre>');
    print_r($arrinforUsuario);
    print_r('<pre>');




    $UsuDoc = new docente ("Margarita","Cadena","tucolegio@gmail.com","Masculino","denfdebfiu51",64651651,"Lic. Español", "Español");
    $arrinfoDoc = $UsuDoc->GetInfoUsuario();

    print_r('<pre>');
    print_r($arrinfoDoc);
    print_r('<pre>');


?>




