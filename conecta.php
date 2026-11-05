<?php
$host = "COLOQUE_SEU_HOST";
$banco = "COLOQUE_SEU_BANCO";
$usuario = "COLOQUE_SEU_USUARIO";
$senha = "COLOQUE_SUA_SENHA";

try {
    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8",
        $usuario,
        $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados.");
}
?>
