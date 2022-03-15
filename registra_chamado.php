<?php
    session_start();



    //Montagem do texto

    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);


    //implode('#',)

    $texto = $_SESSION['id'] .'#'. $titulo.'#'. $categoria.'#'. $descricao . PHP_EOL;
    echo $texto;

    //criando e abrindo um arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

    //escrevendo no arquivo
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    //redirecionando
    header('Location: abrir_chamado.php')

?>