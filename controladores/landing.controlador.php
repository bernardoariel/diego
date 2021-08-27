<?php
    
Class ControladorLanding{

    static public function ctrDatosWeb($item,$valor){

        $tabla = 'info';

        $respuesta = ModeloLanding::mdlDatosWeb($tabla,$item,$valor);
     
        return $respuesta;
    }

    static public function ctrPaginas($item,$valor){

        $tabla = 'paginas';

        $respuesta = ModeloLanding::mdlPaginas($tabla,$item,$valor);
     
        return $respuesta;

    }
    static public function ctrMostrarPaginas($item,$valor,$orden,$limite,$modo,$estado){

        $tabla = "paginas";

		$respuesta = ModeloLanding::mdlMostrarPaginas($tabla,$item,$valor,$orden,$limite,$modo,$estado);

		return $respuesta;
	
	}

}



