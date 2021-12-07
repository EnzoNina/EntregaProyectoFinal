<?php
    class Paginas {		
        public static function enlacesPaginas($enlaceModelo){
        if($enlaceModelo == "nueva" || $enlaceModelo == "allNotes"||$enlaceModelo=="borrar"||
        $enlaceModelo=="editar"||$enlaceModelo=="enviar"){
			$module = "views/modules/".$enlaceModelo.".php";			
		}else if($enlaceModelo=="index"){
            $module = "views/modules/inicio.php";
        }else{
            $module = "views/modules/inicio.php";
        }		
		return $module;
        }
    }
?>