<?php

    //declaracion de variables
    $Nombre=$_POST["nombre"];
    $Apellido1=$_POST["Apellido1"];
    $Apellido2=$_POST["Apellido2"];
    $CorreoElectronico=$_POST["correo"];
    $Contraseña=$_POST["password"];
    $FechaNacimiento=strtotime($_POST["FDN"]);
    $FechaNacimiento= date('Y-m-d H:i:s', $FechaNacimiento);
    $Gender= $_POST['gender'];
    

    
    //conexion
    $conn =new mysqli('localhost','root','','es1822021661');
    //sql
    $sql ="INSERT INTO  usuario(Nombre, Apellido1, Apellido2, CorreoElectronico, Contraseña, FechaNacimiento, sexo) 
    VALUES('$Nombre', '$Apellido1', '$Apellido2', '$CorreoElectronico', '$Contraseña', '$FechaNacimiento','$Gender')";
    if($conn->query($sql) === TRUE){
        echo "Datos insertados de manera correcta";
    }else {
        echo "Error en la insercion";
        echo "Codigo de eror:".$sql."<br>".$conn->error_get_last;
    }
?>