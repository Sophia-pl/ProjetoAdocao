<?php
include_once('../includes/header.php');

$acao = filter_var(isset($_GET['acao']) ? $_GET['acao'] : 'bemvindo', FILTER_SANITIZE_STRING);

$paginas = [
    'bemvindo' => 'index.php',
    'perfil' => 'proprietario.html',
];

$pagina_incluir = isset($paginas[$acao]) ? $paginas[$acao] : $paginas['bemvindo'];

include_once($pagina_incluir);

include_once('../includes/footer.php');