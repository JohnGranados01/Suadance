<?php

include ("database.php");

if(isset($_POST['Fin_registro'])){
    if(strlen($_POST['id'])>=1 &&
        strlen($_POST['name'])>=1 &&
        strlen($_POST['apellido'])>=1 &&
        strlen($_POST['email'])>=1 &&
        strlen($_POST['telefono'])>=1 &&
        strlen($_POST['direccion'])>=1 &&
        strlen($_POST['dateBirthday'])>=1 &&
        strlen($_POST['nameParent'])>=1 &&
        strlen($_POST['lastNameParent'])>=1 &&
        strlen($_POST['phoneParent'])>=1 &&
        strlen($_POST['dateBegin'])>=1 &&
        strlen($_POST['dateEnd'])>=1 &&
        strlen($_POST['observaciones'])>=1){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $dateBirthday = $_POST['dateBirthday'];
            $nameParent = $_POST['nameParent'];
            $lastNameParent = $_POST['lastNameParent'];
            $phoneParent = $_POST['phoneParent'];
            $dateBegin = $_POST['dateBegin'];
            $dateEnd = $_POST['dateEnd'];
            $observaciones = $_POST['observaciones'];
            $consulta= "INSERT INTO students(Id, Nombre, Apellidos, email, telefono, direccion, fecha_nac, fecha_inicio, nombre_acudiente, ape_acudiente, tel_acudiente, fecha_fin, observaciones) 
                VALUES ('$id','$name','$apellido', '$email','$telefono','$direccion','$dateBirthday','$nameParent','$lastNameParent','$phoneParent','$dateBegin','$dateEnd','$observaciones')";
            $records = $conn->prepare($consulta);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            if($results){
                
            }else{
                echo '<script language="javascript">alert("El estudiante se ha registrado con éxito :)");</script>';
                
            }
    }else{
        ?>
            <h3 class="bad">Por favor complete todos los campos</h3>
        <?php
    }
}
?>