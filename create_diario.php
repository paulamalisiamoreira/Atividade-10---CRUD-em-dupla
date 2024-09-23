<?php 
include 'db.php';

if(isset($_POST['create_diario'])){
    $hora_aula = $_POST['hora_aula'];
    $turma = $_POST['turma'];


    $sql = "INSERT INTO diario (hora_aula, turma ) values ('$hora_aula', '$turma');";

    if ($conn->query($sql) === TRUE){
        echo "Novo registro realizado com sucesso!";
    } else{
        echo "Registro não realizado!";
    }
}

$conn-> close();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Registros</title>
</head>
<body>
    <!-- Adicionar Diário -->
    <h2>Adicionar Diário</h2>
    <form method="POST" name="adicionar_diario">
     Hora aula: <input type="time" name="hora_aula" required> <br><br>
     Turma: <input type="text" name="turma" required > <br><br>
     <input type="SUBMIT" name="create_diario" value="Adicionar Diario">
    </form>
</body>
</html>