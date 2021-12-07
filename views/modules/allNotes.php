<?php
$objNotas= new Notas();
$datos=$objNotas->run_query();
?>
<div class="container-fluid allnotes">
  <div class="table-responsive">
  <table >
          <thead>
            <tr>
              <th style="width:60px">Numero</th>
              <th style="width:120px">Titulo</th>
              <th style="width:500px">Texto</th>
              <th class="fecha">Fecha y Hora</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach($datos as $user){
              ?>
              <tr>
                <td><?php echo $user["numero"] ?></td>
                <td><?php echo $user["titulo"] ?></td>
                <td><?php echo $user["texto"] ?></td>
                <td><?php echo $user["fecha"] ?></td>
                <td>
                  <a href="index.php?pagina=borrar&numero=<?php echo $user['numero'];?>">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="index.php?pagina=editar&numero=<?php echo $user['numero'];?>&titulo=<?php echo $user['titulo'];?>&texto=<?php echo $user['texto']; ?>">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="index.php?pagina=enviar&titulo=<?php echo $user['titulo'];?>&texto=<?php echo $user['texto']; ?>">                  
                  <i class="fas fa-paper-plane"></i>
                  </a>                
                </td>
              </tr>
              <?php
            }      
            ?>    
          </tbody>
        </table>  
  </div>              
      </div>