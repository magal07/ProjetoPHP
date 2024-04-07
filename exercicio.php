<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>PHP</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>PHP</h1>
        <h2>FULL STACK!</h2>

    </header>
    <nav class="navegacao"><a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>class="verde">Sem formatação</a><a href="index.php" class="vermelho">Voltar</a></nav>
    <main class="principal">
        <div class="conteudo"><?php
                                // 
                                // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                                // {$_GET['dir']} {$_GET['file']} . ".php"");

                                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                                ?></div>
        </nav>
        </div>
    </main>
    <footer class="rodape">COD3R & ALUNOS ©️ <?= date('D M Y'); ?></footer>
</body>

</html>echo teste ();
\\*
/* $user = new user;