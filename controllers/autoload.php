<?php
    #Carga las clases si no estan definidas
    function autoload($clase){
        require_once($clase.".php");
    }
    spl_autoload_register("autoload");
?>