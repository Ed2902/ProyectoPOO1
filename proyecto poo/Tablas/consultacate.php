<?php

  require_once "../Clases/categoria.php";
  $categoria = categoria::mostrar();

  ?>
  
  <html>
      <head>
      <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
      </head>

      <body>

        <table  id="myTable" class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
            </tr>
            </thead>
            <tbody>
          <?php foreach ($categoria as $item): ?>
            <th> <?php echo $item['ID_Categoria']; ?> </th>
            <th><?php echo $item['NombreCategoria']; ?></th>       
            <th><?php echo $item['DescripcionCat']?></th>
            </th>
          </tr>
          <?php endforeach; ?>
            </tbody> 
          </table>

          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
          <script>
            $(document).ready(function() {
                $('#myTable').DataTable( 
                    
                );
            } );
            </script>
      </body>

  </html>