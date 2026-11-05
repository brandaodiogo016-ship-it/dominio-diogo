<?php
include "conecta.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM aluno WHERE cpf = :cpf AND senha = :senha";

try {
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    if ($linha = $stmt->fetch()) {
        echo "Login bem-sucedido! Bem-vindo, " . htmlspecialchars($linha['nome']);
    } else {
        echo "CPF ou senha incorretos.";
    }

} catch (PDOException $e) {
    echo "Erro ao executar consulta.";
}
?>
