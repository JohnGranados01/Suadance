<?php

include ("database.php");
if(isset($_POST['update_class'])){
    if(strlen($_POST['id'])>=1 && strlen($_POST['dateBegin'])>=1 && strlen($_POST['dateEnd'])>=1){
            
            $id = $_POST['id'];
            $dateBegin = $_POST['dateBegin'];
            $dateEnd = $_POST['dateEnd'];
            $package = $_POST['paquete'];
            $observaciones = $_POST['observaciones'];
            
            if($dateEnd<$dateBegin){
                echo '<script language="javascript">alert("La fecha de finalización no puede ser menor a la de comienzo, el estudiante no se registró");</script>';
            }else{
                $consulta= "UPDATE students SET fecha_inicio='$dateBegin',fecha_fin='$dateEnd',paquete='$package',observaciones='$observaciones' WHERE Id='$id'";
                $records = $conn->prepare($consulta);
                $records->execute();
                $results = $records->fetch(PDO::FETCH_ASSOC);
                if($results){
                    
                }else{
                    echo '<script language="javascript">alert("Se ha actualizado el paquete de clases");</script>';
                }
            }
    }else{
        ?>
            <h3 class="bad">Por favor complete todos los campos</h3>
        <?php
    }
}


 

?>

<script> 
<!--
window.location.replace('index.php'); 
//-->
</script>

