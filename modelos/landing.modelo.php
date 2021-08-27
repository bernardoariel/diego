<?php

require_once "conexion.php";

class ModeloLanding{

	static public function mdlDatosWeb($tabla,$item,$valor){
      
        /*=============================================
	      - -     - MOSTRAR DATOS DE LA WEB -      - -
        ==============================================*/
        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre = 'landing'");

            // $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll(PDO::FETCH_CLASS);

        }
        
    }
	static public function mdlPaginas($tabla,$item,$valor){

        /*=============================================
	      - -     - MOSTRAR PAGINAS -      - -
        ==============================================*/
        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll(PDO::FETCH_CLASS);

        }
        
    }

	/*=============================================
	MOSTRAR PAGINAS
	=============================================*/

	static public function mdlMostrarPaginas($tabla, $item, $valor,$orden,$limite,$modo,$estado){

        if($item != null){ //si envias un item
			
			if($modo==1){ //para que devuelva solo una

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item and visible = $estado");
	
				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
	
				$stmt -> execute();
	
				return $stmt -> fetch();

			}else{//devuelva muchos

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item and visible =$estado $orden $limite");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();

			}


		}else{

			
			$orden  = ($orden) ? "ORDER BY ".$orden." ".$modo:  "";
			$limite = ($limite) ? $limite :  "";
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE visible =$estado $orden $limite");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

    }

}
