<?php
    session_start();
    $conexion = mysqli_connect('localhost','root','1234','check');

    if (isset($_POST['save'])) {
        $pais = $_POST['pais'];

        foreach($pais as $item){
            // echo $item . "<br>";
            $query = "INSERT INTO demo(name) VALUES('$item')";
            $query_run = mysqli_query($conexion, $query);
            // Este comando ejecuta una consulta única contra una base de datos
        }
    } 

    if ($query_run) {
        $_SESSION['status'] = "Insertado correctamente";
        header("Location:index.php");
    } else{
        $_SESSION['status'] = "No se cargo el dato";
        header("Location:index.php");
    }

    
?>