<?php
$objNotas= new Notas();
$idBorrar=isset($_GET['numero'] ) ? $_GET['numero'] : 0;
$objNotas->borrar($idBorrar);
?>