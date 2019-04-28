<?php
    include_once 'php/conexion.php';
    
    $sql_categ = 'SELECT * FROM usuarios';
    $gsent = $pdo->prepare($sql_categ);
    $gsent->execute();
    $resultado = $gsent->fetchAll();

    $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado FROM novedad n, usuarios u WHERE n.idUsuario = u.id';
    $gsentNov = $pdo->prepare($sql_categ);
    $gsentNov->execute();
    $novedades = $gsentNov->fetchAll();
    
    $fechaActual=date("Y/m/d");
    for( $i = 0; $i < sizeof($novedades); $i++){                      
        $fechaInicial = $novedades{$i}['fechaCreacion'];
        $fechaActual = date('Y-m-d'); // la fecha del ordenador
                        
        $diff = abs(strtotime($fechaActual) - strtotime($fechaInicial));
                
        $years = floor($diff / (365*60*60*24));        
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));        
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        if($novedades{$i}['estado']=="Solucionado"){
            $novedades{$i}['importancia']=0;
        }else{
            if($months!=0){
                $novedades{$i}['importancia']=1;
            }else{
                if($days>=0)
                    $novedades{$i}['importancia']=3;
                if($days>7)            
                    $novedades{$i}['importancia']=2;
                if($days>14)
                    $novedades{$i}['importancia']=1;
                
                
                
            }
        }
        
    }
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
    <div  style="padding:1cm;" >
    
    <br>
    <br>
    <!--CONTENIDO-->
    <br>
    <div class="row mt-5 col">            
        <a href="crearUsuario.php" class="col">                    
            <button type="button" class="btn btn-primary btn-lg btn-block" >Crear Usuario</button>                    
        </a>               
        <a href="crearNovedad.php" class="col">                    
            <button type="button" class="btn btn-info btn-lg btn-block">Crear Novedad</button>                    
        </a>        
    </div>

    <div class="table-responsive ">
        
        <h1 class="col-3">Novedades</h1>           
        
        <table class="table table-hover  " id="novedad" style="width:100%">
            <thead class="">
                <tr>
                    <th scope="col"></th>  
                    <th scope="col">No. Reporte</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">NIT</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Diagnostico</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>                    
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($novedades as $novedad):?>                
                    <tr>
                        <td><img height="20px" style="border-radius:100%"                     
                            src="img/<?php  if($novedad['importancia']==0){echo 'check.png';} 
                                            if($novedad['importancia']==1){echo 'rojo.png';} 
                                            if($novedad['importancia']==2){echo 'amarillo.png';} 
                                            if($novedad['importancia']==3){echo 'verde.png';} ?>"/>
                            <h6 style="display:none"><?php   if($novedad['importancia']==0){echo '4';} 
                                    if($novedad['importancia']==1){echo '1';} 
                                    if($novedad['importancia']==2){echo '2';} 
                                    if($novedad['importancia']==3){echo '3';} ?>
                            </h6>
                        </td>   
                        <th><?php echo $novedad['idReporte'];?></th>
                        <td><?php echo $novedad['nombres'];?></td>
                        <td><?php echo $novedad['nit'];?></td>
                        <td><?php echo $novedad['telefono'];?></td>
                        <td><?php echo $novedad['motivo'];?></td>
                        <td><?php echo $novedad['diagnostico'];?></td>
                        <td><?php echo $novedad['costo'];?></td>
                        <td><?php echo $novedad['fechaCreacion'];?></td>                        
                        <td><?php echo $novedad['estado'];?></td>    
                        <td>
                            <a href="modificarNovedad.php?id=<?php echo $novedad['idReporte']?>"> 
                                <button type="button" class="btn btn-primary" >
                                    Ver
                                </button>
                            </a>
                        </td>  
                        <td>
                            <a href="php/solucionar.php?id=<?php echo $novedad['idReporte']?>"> 
                                <button type="button" class="btn btn-outline-danger" <?php if($novedad['estado']=="Solucionado"){echo 'disabled';}?>>
                                    Solucionado
                                </button>
                            </a>
                        </td>                         
                    </tr>                    
                <?php endforeach?>            
            </tbody>
        </table>
        
    </div>
    

    <div class="table-responsive ">
        <div class="mt-5  row">
            <h1 class="col-3">Clientes</h1>           
        </div>
        <table class="table table-hover " id="example" style="width:100%">
            <thead >
                <tr>
                    <th scope="col">Nit</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">MAC</th>
                    <th scope="col">IP</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Valor</th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $usuario):?>                
                    <tr>
                        <th><?php echo $usuario['nit'];?></th>
                        <td><?php echo $usuario['nombres'];?></td>
                        <td><?php echo $usuario['apellidos'];?></td>
                        <td><?php echo $usuario['telefono'];?></td>
                        <td><?php echo $usuario['email'];?></td>
                        <td><?php echo $usuario['direccion'];?></td>
                        <td><?php echo $usuario['marca'];?></td>
                        <td><?php echo $usuario['mac'];?></td>
                        <td><?php echo $usuario['ip'];?></td>
                        <td><?php echo $usuario['plan'];?></td>
                        <td><?php echo $usuario['valor'];?></td>
                        
                        <td>
                            <a href="modificarUsuario.php?id=<?php echo $usuario['id']?>"> 
                                <button type="button" class="btn btn-primary" >
                                    Editar
                                </button>
                            </a>
                        </td>                       
                    </tr>                    
                <?php endforeach?>            
            </tbody>
        </table>
        
    </div>
    </div>
    <br>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable();
            $('#novedad').DataTable();
        } );
    </script>
  </body>
</html>



