<?php

    require_once "../../API/Conexion/Conexion.php";
    
    $id_usuario_actual = 1; 

    $fondosTotal = 0; 
    
    try {
        $conexion = new Conexion();
        $conn = $conexion -> iniciar();

        $sql = "SELECT fondosTotal FROM usuario WHERE idUsuario = :id";
        $stmt = $conn -> prepare($sql);
        
        $stmt -> bindParam(':id', $id_usuario_actual, PDO::PARAM_INT);
        $stmt -> execute();

        $resultado = $stmt -> fetch(PDO::FETCH_ASSOC);
        
        if ($resultado && isset($resultado['fondosTotal'])) {
            $fondosTotal = $resultado['fondosTotal']; 
        }

    } catch (PDOException $e) {
        error_log("Error de base de datos al obtener fondos: " . $e -> getMessage());
    }
?>