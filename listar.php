<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listar Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Reservas Realizadas</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Espaço</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM reservas";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['nome']}</td><td>{$row['espaco']}</td><td>{$row['data']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhuma reserva encontrada</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
