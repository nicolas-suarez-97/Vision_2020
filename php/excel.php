<?php

include_once 'conexion.php';

$estado = $_POST['estado'];        
$fechaDesde = $_POST['fechaDesde'];
$fechaHasta = $_POST['fechaHasta'];


if($estado == "Todos"){
    
    if($fechaDesde==""){
        if($fechaHasta ==""){
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id ' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute();
            $resultado = $gsent->fetchAll();
            
        }else{
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id AND n.fechaCreacion <=?' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute(array($fechaHasta));
            $resultado = $gsent->fetchAll();
        }

    }else{        
        if($fechaHasta ==""){
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id AND n.fechaCreacion >=?' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute(array($fechaDesde));
            $resultado = $gsent->fetchAll();
            
        }else{
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id AND n.fechaCreacion <=? AND n.fechaCreacion>=?' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute(array($fechaHasta,$fechaDesde));
            $resultado = $gsent->fetchAll();
        }
        
    }

}else{
    if($fechaDesde==""){
        if($fechaHasta ==""){
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id AND n.estado=?' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute(array($estado));
            $resultado = $gsent->fetchAll();
            
        }else{
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id AND n.fechaCreacion <=? AND  n.estado=?' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute(array($fechaHasta, $estado));
            $resultado = $gsent->fetchAll();
        }

    }else{        
        if($fechaHasta ==""){
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id AND n.fechaCreacion >=? AND n.estado=?' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute(array($fechaDesde,$estado));
            $resultado = $gsent->fetchAll();
            
        }else{
            $sql_categ = 'SELECT n.idReporte,u.nombres,u.nit,u.telefono,u.direccion,u.email,u.plan,n.motivo,n.diagnostico,n.costo,n.fechaCreacion,n.estado,n.observaciones FROM novedad n, usuarios u WHERE n.idUsuario = u.id AND n.fechaCreacion <=? AND n.fechaCreacion>=? AND n.estado=?' ;
            $gsent = $pdo->prepare($sql_categ);
            $gsent->execute(array($fechaHasta,$fechaDesde, $estado));
            $resultado = $gsent->fetchAll();
        }
        
    }
}


header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=nombre_archivo.xls');

?>
    <table cellpadding="2" cellspacing="0" width="100%">
        <thead style="font-weight:bold">
            <tr>
                
                <th scope="col">No. Reporte</th>
                <th scope="col">Cliente</th>
                <th scope="col">NIT</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Email</th>
                <th scope="col">Plan</th>
                <th scope="col">Motivo</th>
                <th scope="col">Diagnostico</th>
                <th scope="col">Costo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estado</th>                    
                <th scope="col">Observaciones</th>        
               
            </tr>
        </thead>
        <tbody>
            <?php foreach($resultado as $novedad):?>                
                <tr>                     
                    <th><?php echo $novedad['idReporte'];?></th>
                    <td><?php echo $novedad['nombres'];?></td>
                    <td><?php echo $novedad['nit'];?></td>
                    <td><?php echo $novedad['telefono'];?></td>
                    <td><?php echo $novedad['direccion'];?></td>
                    <td><?php echo $novedad['email'];?></td>
                    <td><?php echo $novedad['plan'];?></td>                    
                    <td><?php echo $novedad['motivo'];?></td>
                    <td><?php echo $novedad['diagnostico'];?></td>
                    <td><?php echo $novedad['costo'];?></td>
                    <td><?php echo $novedad['fechaCreacion'];?></td>                        
                    <td><?php echo $novedad['estado'];?></td>    
                    <td><?php echo $novedad['observaciones'];?></td>    
                                         
                </tr>                    
            <?php endforeach?>            
        </tbody>
    </table>

