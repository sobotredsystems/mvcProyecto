<?php 
    class Modelo_usuario{
        private $conexion;

        
        function __construct(){
            require_once 'modelo_conexion.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        

        function VerificarUsuario($email, $password){
            $sql = "call cp_verifica_usuario('$email')";
			$arreglo = array();

           
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_array($consulta)) {

					if(password_verify($password, $consulta_VU["clave_usuario"]))
                    {
						//echo $consulta_VU["clave_usuario"];
                        $arreglo[] = $consulta_VU;
                    }
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }


    }
?>