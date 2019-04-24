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
        <h1 class="mt-5">Usuario </h1>
        <br>
        <h4>Datos básicos</h4>
        <form action="php/agregarUsuario.php" method="POST">
            <div class="row">
                <div class="col">
                    <label>Nombres</label>                    
                    <input type="text" class="form-control" placeholder="Nombres" name="nombres" required>                    
                </div>
                <div class="col">
                    <label>Apellidos</label>                    
                    <input type="text" class="form-control" placeholder="Apellido" name="apellidos" required>                    
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label>NIT</label>                                    
                    <input type="number" class="form-control" placeholder="Ej: 1020836845 " name="nit" required>                                    
                </div>
                <div class="col ">
                    <label>Telefono</label>                                           
                    <input type="number" class="form-control" placeholder="Ej: 320 399 7741" name="telefono" required>                                        
                </div>
            </div>
            <div class=" mt-3 row ">
                <label class="col-sm-2 col-form-label">Dirección</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Ej: Calle 3 No. 4- 11" name="direccion">
                </div>
            </div>
            <div class=" mt-3 row ">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control"  placeholder="Ej: vision2020@gmail.com" name="email" required>
                </div>
            </div>
            <br>
            <br>

            <h4>Datos del Servicio</h4>
            <div class="row">
                <div class="col">
                    <label>Equipo</label>                    
                    <input type="text" class="form-control " placeholder="Marca" name="marca">                    
                </div>
                <div class="col">
                    <label>MAC</label>                    
                    <input type="text" class="form-control" placeholder="MAC" name="mac">                    
                </div>
                <div class="col">
                    <label>IP</label>                    
                    <input type="text" class="form-control" placeholder="xxx.xxx.xxx.xxx" name="ip">                    
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label>Plan Internet</label>                    
                    <input type="text" class="form-control " placeholder="Plan" name="plan">                    
                </div>
                <div class="col">
                    <label>Valor</label>                    
                    <input type="number" class="form-control" placeholder="$" name="valor">                    
                </div>                
            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Crear</button>
            </div>
            <br>
            <br>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
