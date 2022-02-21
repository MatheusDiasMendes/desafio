
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
