<?php

require_once 'Vinho.php';
$resultado = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $tipo = isset($_POST['tipo']) ? (string)$_POST['tipo'] : null;
    $preco = isset($_POST['preco']) ? (double)$_POST['preco'] : null;
    $safra = isset($_POST['safra']) ? (int)$_POST['safra'] : null;
}

$vinho1 = new Vinho($nome, $tipo, $preco, $safra);

if (isset($_POST["ver"])) {
    $resultado = $vinho1->mostrarVinho();
}

if (isset($_POST["verificar"])) {
    if ($vinho1->verificarPreco($preco)) {
        $resultado="Produto na promoção!";
    } else {
        $resultado="Produto está no preço normal!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h3>Resultado</h3>
    <p> <?php echo isset($resultado) ? $resultado : ''; ?></p>
    <a href="Tela.php">Voltar</a>
</body>
</html>
