<?php

require_once ("autoload.php");
class Notas extends conexion{#Herencia de objetos
    private $numero;
    private $titulo;
    private $texto;
    private $fecha;
    #Constructor    
    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    #Metodos
    public function insertar($ti,$te,$fe){
        $this->titulo=$ti;
        $this->texto=$te;
        $this->fecha=$fe;        
        $sql = "INSERT INTO notas (titulo, texto, fecha) VALUES (?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData=array($this->titulo,$this->texto,$this->fecha);
        $resInsert=$insert->execute($arrData);        
    }
    public function run_query(){        
	    $sql = 'SELECT * FROM notas';
        $execute=$this->conexion->query($sql);        
        $request=$execute->fetchall(PDO::FETCH_ASSOC);#Devuelve array associado
	    return $request;
    }
    function actualizar($numero,$titulo,$texto,$fecha){
        $this->numero=$numero;
        $this->titulo=$titulo;
        $this->texto=$texto;
        $this->fecha=$fecha;        
        $sql="UPDATE notas SET titulo=?, texto=?, fecha=? WHERE numero=$numero";
        $actualizar=$this->conexion->prepare($sql);
        $arrData=array($this->titulo,$this->texto,$this->fecha);
        $res=$actualizar->execute($arrData);
    }
    function borrar($numero){        
        $sql="DELETE FROM notas WHERE numero=?";
        $arrWhere=array($numero);
        $borrar=$this->conexion->prepare($sql);
        $res=$borrar->execute($arrWhere);
    }
    
    #LLamamos a la plantilla
    public function plantilla(){
        include "views/template.php";
    }
    #Interaccion del usuario    
    public function interaccion(){

        if(isset($_GET["pagina"])){
            $enlace = $_GET["pagina"];
        }
        else{
            $enlace="views/modules/index.php";
        }

        $respuesta = Paginas::enlacesPaginas($enlace);        
        include $respuesta;
    }
    
}

?>