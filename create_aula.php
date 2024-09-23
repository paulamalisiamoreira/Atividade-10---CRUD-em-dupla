<?include 'db.php'; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numero_sala = $_POST['sala'];
    $tipo_sala = $_POST['tipo_sala'];
}

$sql = "INSERT INTO aulas (numero_sala, tipo_sala) values ($numero_sala, $tipo_sala);";

if ($conn->query($sql) == TRUE){
    echo "Novo registro realizado com sucesso!";
} else{
    echo "Registro não realizado!";
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

    <!-- Adicionar Aula -->
    <h2>Adicionar Aula</h2>
    <form method="POST" name="adicionar_aula">
     Numero da Sala: <input type="number" name="sala" required> <br><br>
     Tipo da Sala: <input type="text" name="tipo_sala" required> <br><br>
     <input type="SUBMIT">
    </form>

</body>
</html>