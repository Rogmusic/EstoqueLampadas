<?php
// Informações de conexão (substitua pelos seus dados)
$host = "crookedly-cordial-manta.data-1.use1.tembo.io";
$dbname = "estoque_lampadas";
$user = "postgres";
$password = "47Saw1MMqccRom5x";

// Conectar ao banco de dados
try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e)
 {
    echo "Erro de conexão: " . $e->getMessage();
}
?>
