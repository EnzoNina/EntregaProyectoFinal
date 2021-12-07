<?php
$offset=6*60*60;
$objNotas= new Notas();
/*Obtener datos pasados*/  
$numero=isset( $_GET['numero'] ) ? $_GET['numero'] : '';
$tituloPa=isset( $_GET['titulo'] ) ? $_GET['titulo'] : '';
$textoPa=isset( $_GET['texto'] ) ? $_GET['texto'] : '';
if( $_POST )
{  
  /*Datos a enviar*/
  $titulo=isset( $_POST['titulo'] ) ? $_POST['titulo'] : '';
  $texto=isset( $_POST['texto'] ) ? $_POST['texto'] : '';
  $fecha=date('Y/m/d h:i:s a', time()-$offset);
  $objNotas->actualizar($numero,$titulo,$texto,$fecha);
  die();
}
?>

<form method="post">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" value="<?php echo $tituloPa; ?>" name="titulo"/>
  <label for="floatingInput">Titulo</label>
</div>
<div class="form-floating">
  <input class="form-control" name="texto" id="floatingTextarea2"  value="<?php echo $textoPa; ?>" style="height: 100px"/>
  <label for="floatingTextarea2">Texto</label>
</div>
<button class="cta" type="submit">
  <span class="hover-underline-animation"> Editar nota </span>
  <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
  </svg>
</button>              
</form> 