<?php

require('bd.php');
class usuario {

    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Telefono;
    private $Calle;
    private $NumeroExterior;
    private $NumeroInterno;
    private $Colonia;
    private $Municipio;
    private $Estado;
    private $CP;
    private $Correo;
    private $Usuario;
    private $Contraseña;
    private $Nivel;
    private $Estatus;


    public function createUsuario(){

    echo "";
}
    public function readUsuarioG(){

    echo "";
        $sql1= "SELECT * FROM usuario where Estatus = 1  order by ApellidoPaterno";
        $result1= mysql_query($sql1) or die ("error en la conexion a tabla");
        echo "<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><th>ID</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th>";
        while($field=mysql_fetch_array($result1)){
            $this->Id=$field['Id'];
            $this->Nombre=$field['Nombre'];
            $this->ApellidoPaterno=$field['ApellidoPaterno'];
            $this->ApellidoMaterno=$field['ApellidoMaterno'];
            $this->Nivel=$field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type="Administrador";
                    break;
                case 2:
                    $type="Maestro";
                    break;
                case 3:
                    $type="Alumno";
                    break;
            }
            echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";

        }
        echo"</table>";
        echo"</div>";

}
    public function readUsuarioS(){

    echo "";
}
    public function updateUsuario(){

    echo "";
}
    public function deleteUsuario(){

    echo "";
}


}
?>