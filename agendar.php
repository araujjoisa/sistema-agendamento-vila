<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agendar Espaço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Agendar Espaço</h2>

<form method="post">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Espaço:</label>
        <input type="text" name="espaco" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data:</label>
        <input type="date" name="data" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Agendar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $espaco = $_POST['espaco'];
    $data = $_POST['data'];
    
    $sql = "INSERT INTO reservas (nome, espaco, data) VALUES ('$nome', '$espaco', '$data')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p class='alert alert-success mt-3'>Reserva realizada com sucesso!</p>";
    } else {
        echo "<p class='alert alert-danger mt-3'>Erro: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
