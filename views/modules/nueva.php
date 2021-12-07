<?php
$objNotas= new Notas();
$diferencia=6*60*60;

if( $_POST )
{  
  $titulo=isset( $_POST['titulo'] ) ? $_POST['titulo'] : '';
  $texto=isset( $_POST['texto'] ) ? $_POST['texto'] : '';
  $fecha=date('Y/m/d h:i:s a', time()-$diferencia);
  $objNotas->insertar($titulo,$texto,$fecha);
  die();
}
?>

<div class="container comentarios">
        <form method="post">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="titulo"/>          
          <label for="floatingInput">Titulo</label>
        </div>
        <div class="form-floating">
          <input class="form-control" name="texto" id="floatingTextarea2" style="height: 100px"/>
          <label for="floatingTextarea2">Texto</label>
        </div>
        <div id="boton">            
            <button class="cta" type="submit">
            <span class="hover-underline-animation"  > Agregar nueva nota </span>
            <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
                <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
            </svg>
            </button>              
        </div>                   
        </form> 
      </div>