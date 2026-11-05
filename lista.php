<?php
include "conecta.php";

$sql = "SELECT * FROM aluno";

$stmt = $conexao->prepare($sql);
$stmt->execute();

echo "<h1>Lista de Alunos</h1>";

while ($linha = $stmt->fetch()) {
    echo "<p>";
    echo "<b>Nome:</b> " . htmlspecialchars($linha['nome']);
    echo "</p>";
}
?>
