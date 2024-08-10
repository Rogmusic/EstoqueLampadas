<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pesquisa de Itens</title>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="pesquisa" placeholder="Pesquisar por tipo ou cor">
        <input type="submit" value="Pesquisar">
    </form>
    
    <?php
    include 'conexao.php';

    // Verificar se o formulário foi enviado
    if (isset($_GET['pesquisa'])) {
        $pesquisa = $_GET['pesquisa'];

        // Consulta com filtro
        $sql = "SELECT * FROM itens WHERE tipo LIKE :pesquisa OR cor LIKE :pesquisa";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':pesquisa', "%$pesquisa%", PDO::PARAM_STR);
        $stmt->execute();
    } else {
        // Consulta padrão (se nenhum filtro for aplicado)
        $sql = "SELECT * FROM itens";
        $stmt = $pdo->query($sql);
    }

    // Exibir resultados
    if ($stmt->rowCount() > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Tipo</th><th>Cor</th><th>Outros Campos</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tipo']) . "</td>";
            echo "<td>" . htmlspecialchars($row['cor']) . "</td>";
            // Exibir outros campos conforme necessário
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
    ?>
</body>
</html>
