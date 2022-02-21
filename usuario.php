<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="estilo.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
   <section>
    <div>
        <br>
    <h1>Bem Vindo</h1>

    <form method="POST" action="usuario.php">
        <label><b>Nome</b> </label>
        <input type="nome" name="nome" id="nome" placeholder="Ex: Matheus" required><br><br>
        <label"><b>data</b> </label>
        <input type="date" name="data" id="data" placeholder ="Ex: 21/02/2022" required><br><br>
        <button type="submit" name="confirmar" id="show">Confirmar</button>
    </div>
   </section>  

   <script src="script.js"></script>
</body>
</html>



<?php
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_POST['nome'];
$data = $_POST['data'];

    // separando yyyy, mm, ddd
    list($ano, $mes, $dia) = explode('-', $data);

    // data atual
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

    // cálculo
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

        echo "Meu nome é $nome em $data e tenho $idade anos";
    
?>
