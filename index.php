<?php include('valida_sessao.php'); ?>
<!-- Inclui o arquivo 'valida_sessao.php' para garantir que o usuário esteja autenticado -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Principal</title>
    <!-- Link para o arquivo CSS para estilização da página -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Exibe uma mensagem de boas-vindas com o nome do usuário logado -->
        <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?></h2>
        <ul class="menu">
            <!-- Links de navegação para as funcionalidades do sistema -->
            <li><a href="cadastro_fornecedor.php">Cadastro de Fornecedores</a></li>
            <li><a href="cadastro_produto.php">Cadastro de Produtos</a></li>
            <li><a href="listagem_produtos.php">Listagem de Produtos</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </div>
</body>
</html>
