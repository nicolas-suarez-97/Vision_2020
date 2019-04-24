<?php
    include_once 'php/conexion.php';
    $sql_categ = 'SELECT * FROM usuarios ORDER BY nit';
    $gsent = $pdo->prepare($sql_categ);
    $gsent->execute();
    $resultado = $gsent->fetchAll();
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
    <title>Visión 2020</title>
  </head>
  <body >
    <?php include 'php/navbar.php'?>
    <br>
    <br>
    <!--CONTENIDO-->    
    <div class="container">
        
        <h1 class="mt-5">Novedad </h1>
        <br> 
        
        <form action="php/agregarNovedad.php" method="POST">
            <div class="row">
                <div class="col">
                    <label>Fecha</label>                    
                    <input type="date" class="form-control" name="fecha">                    
                </div>
                <div class="col">
                    <label>No. de Reporte</label>                    
                    <input type="number" class="form-control" placeholder="" name="noReporte" required>                    
                </div>
            </div>
            <br>
            <div class="row">
                <h3 class="col">Información del Cliente</h3> 
                               
            </div>

            <div class="row mt-3">
                <div class="col ">
                    <label>NIT</label>                                           
                    <select class="custom-select mr-sm-2" id="nit" name="nit" >
                        <option selected></option>
                        <?php foreach ($resultado as $usuario):?>      
                            <option value="<?php echo $usuario['id']?>"><?php echo $usuario['nit']?></option>
                        <?php endforeach?>                                                      
                    </select>                                        
                </div>                
                <div class="col">
                    <label>Nombre</label>                                    
                    <input type="text" class="form-control" placeholder="" >                                    
                </div>
            </div>   
            <div class="row mt-3">
                <div class="col ">
                    <label>Plan de Internet</label>                                           
                    <input type="text" class="form-control" placeholder="">                                        
                </div> 
                <div class="col ">
                    <label>Telefono</label>                                           
                    <input type="number" class="form-control" placeholder="Ej: 320 399 7741">                                        
                </div>     
            </div>
            <div class=" mt-3 row ">
                <label class="col-sm-2 col-form-label">Dirección</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Ej: Calle 3 No. 4- 11">
                </div>
            </div>
            <div class=" mt-3 row ">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control"  placeholder="Ej: vision2020@gmail.com">
                </div>
            </div>
            <br>
            <h3>Información Novedad</h3>

            <div class=" mt-3 row ">
                <label class="col-sm-2 col-form-label">Motivo:</label>
                <div class="col-sm-10">
                    <select class="custom-select mr-sm-2" id="motivo" name="motivo">
                        <option value=""></option>
                        <option value="No tiene internet">No tiene internet</option>
                        <option value="Intermitencia">Intermitencia</option>
                        <option value="Cambio de plan">Cambio de plan</option>
                        <option value="Traslado a nuevo domicilio">Traslado a nuevo domicilio</option>
                        <option value="Hurto de Equipos">Hurto de Equipos</option>
                        <option value="Cesión del Contrato">Cesión del Contrato</option>
                        <option value="Suspensión del servicio por parte del usuario">Suspensión del servicio por parte del usuario</option>
                        <option value="Otra">Otra</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="diagnostico">Diagnóstico</label>
                <textarea class="form-control" id="diagnostico" rows="3" name="diagnostico"></textarea>
            </div>            
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="custom-control custom-checkbox mr-sm-2 ">
                        <input type="checkbox" class="custom-control-input"  id="cambio" name="cambio" value="true">
                        <label class="custom-control-label"  for="cambio" >Se necesitó cambiar o retirar equipos</label>
                    </div>                
                </div>
                <div class="col"></div>
            </div>
            <div class=" mt-3 row ">
                <label class="col-sm-2 col-form-label">Cuales:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="" id="cuales" name="cuales">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
            </div> 
            <div class=" mt-3 row ">
                <label class="col-sm-2 col-form-label">Costo de la visita:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control"  placeholder="" id="costo" name="costo">
                </div>
            </div>


            <div class="mt-5">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Crear</button>
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
