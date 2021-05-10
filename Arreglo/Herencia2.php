<?php
    require_once ("3pilaresVista.php");
    
    class docente extends Usuario {
        public $cargo;
        public $asignaturas;

    public function __construct (string $Nombre, string $Apellido, string $Correo, string $sexo, string $contraseña, float $telefono, string $cargo, string $asignaturas){ 
    parent::__construct( $Nombre, $Apellido, $Correo, $sexo, $contraseña, $telefono);

        $this->cargo= $cargo;
        $this->asignaturas = $asignaturas;
     }
     public function GetInfoUsuario(){
        $arrUsuario = array('Nombre'=>$this->Nombre,
                            'Apellido'=>$this->Apellido,
                            'Correo'=>$this->Correo,
                            'sexo'=>$this->sexo,
                            'telefono'=>$this->telefono,
                            'cargo'=>$this->cargo,
                            'asignaruta'=>$this->asignaturas);
        return $arrUsuario;
    }
    }
?>