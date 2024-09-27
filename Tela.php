<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Vinho</title>
</head>
<body>
    <form action="testevinho.php" method="post">
        <label for="nome">Nome do vinho:</label>
        <input type="text" name="nome" id="nome">
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo">
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" required step="0.01">
        <label for="safra">Safra:</label>
        <input type="number" name="safra" id="safra">

        <button type="submit" name="ver">Veja seu vinho</button>
        <button type="submit" name="verificar">Verificar Preço</button>
    </form>
</body>
</html>
