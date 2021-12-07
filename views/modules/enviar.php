<?php
include_once('controllers/envio.php');
if($_POST){
  $titulo= isset( $_GET['titulo'] ) ? $_GET['titulo'] : 0;
  $texto= isset( $_GET['texto'] ) ? $_GET['texto'] : 0;
  $correo= isset( $_POST['correo'] ) ? $_POST['correo'] : 0;
  $nombre= isset( $_POST['nombre'] ) ? $_POST['nombre'] : 0;
  enviar($titulo,$texto,$correo,$nombre);
}
?>


<div class="container comentarios">
        <form method="post">
        <div class="row" style="padding-top: 150px;">
          <div class="col-6">
            <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="correo"/>          
            <label for="floatingInput">Correo Electronico</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nombre"/>          
            <label for="floatingInput">Nombre</label>
            </div>
          </div>
        </div>
        <div class="boton">
        <button class="cta" type="submit">
          <span class="hover-underline-animation"  > Enviar Correo Electronico </span>
          <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
            <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
          </svg>
        </button>              
        </div>                
        </form> 
  </div>