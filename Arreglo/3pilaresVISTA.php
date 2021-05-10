<?php
    class Usuario {
        public $Nombre;
        public $Apellido;
        public $Correo;     
        public $sexo;
        private $contraseña;
        public $telefono;
        
       
        

    public function __construct (string $Nombre, string $Apellido, string $Correo, string $sexo, string $contraseña, string $telefono )
        {
            $this->Nombre = $Nombre;
            $this->Apellido = $Apellido;
            $this->Correo = $Correo;
            $this->sexo = $sexo;
            $this->contraseña = $contraseña;
            $this->telefono = $telefono;
            
        }   
    public function GetInfoUsuario(){
        $arrUsuario = array('Nombre'=>$this->Nombre,
                            'Apellido'=>$this->Apellido,
                            'Correo'=>$this->Correo,
                            'sexo'=>$this->sexo,
                            
                            'telefono'=>$this->telefono);
        return $arrUsuario;
    } 
}

?>