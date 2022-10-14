
<?php
    $dbHost = 'Localhost';
    $dbUsername = 'nucleofilmes_Nucleonew';
    $dbPassword = 'qt~t=.?0U!S~';
    $dbName = 'nucleofilmes_wordpress';

    $conexao = new mysqli($dbHost,$dbUsername, $dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }

    else{
        echo "conexao efetuada com sucesso";

    }
?>


