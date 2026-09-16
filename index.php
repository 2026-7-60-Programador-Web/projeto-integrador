<?php
require_once __DIR__ . '/core/autenticacao.php';

protegerPagina();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Início</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="topo">
    <span>Bem-vindo(a), <?= htmlspecialchars($_SESSION['usuario_nome']) ?></span>
    <a href="controllers/logout.php">Sair</a>
</header>
<main>

</main>

<footer>

</footer>
</body>
</html>