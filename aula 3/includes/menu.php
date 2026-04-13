<?php $perfil = $_SESSION["perfil"]; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema Financeiro</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE ?>pages/dashboard.php">Dashboard</a>
            </li>
            <?php if ($perfil == "cliente") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE ?>pages/contas/listar.php">Minhas Contas</a>
            </li>
            <?php } ?>
            <?php if ($perfil == "empresa") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE ?>pages/contas/listar.php">Contas da Empresa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE ?>pages/contas/cadastrar.php">Cadastrar Conta</a>
            </li>
            <?php } ?>
            <?php if ($perfil == "proprietario") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE ?>pages/contas/listar.php">Todas as Contas</a>
            </li>
            <?php } ?>
            <?php if ($perfil == "financeiro") { echo '<li class="nav-item"><a class="nav-link" href="' . BASE . 'pages/relatorios.php">Relatórios</a></li>'; } ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASE ?>logout.php">Sair</a>
            </li>
        </ul>
    </div>
</nav>
<!-- pedi pra IA completar o codigo cortado do pdf -->