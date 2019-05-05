<?php
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <title>Visión 2020</title>
  </head>
  <body >
    <?php include 'php/navbar.php'?>
    <br>
    <br>
    <!--CONTENIDO-->    
    <div class="container">
        
        <h1 class="mt-5">Exportar </h1>
        <br> 
        
        <form action="php/excel.php" method="POST">           
                        

            <div class="row mt-3">
                <div class="col ">
                    <label>Estado</label>  
                    <select class="custom-select mr-sm-2" id="estado" name="estado" required>                            
                            <option value="Todos">Todos</option>
                            <option value="Pendiente">Pendientes</option>
                            <option value="Solucionado">Solucionado</option>                        
                    </select>                                                        
                </div>                               
            </div>  
            <br/>
         
            <div class="row">
                <div class="col">
                    <label>Fecha Desde</label>                    
                    <input  class="form-control" name="fechaDesde" type="date">                    
                </div>
                <div class="col">
                    <label>Fecha Hasta</label>                    
                    <input type="date" class="form-control" name="fechaHasta" >                    
                </div>
            </div>
          
         
            <div class="mt-5">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Exportar</button>
            </div>
        </form>
        <br>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   
   
  </body>
</html>
