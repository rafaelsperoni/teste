<?php
    //muda o tipo de conteúdo
    header('Content-Type: application/json');

    //verifica se NÃO foram preenchidos os dados de autenticação
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        //modifica o HEADER, informando o tipo de autenticação
        header('WWW-Authenticate: Basic realm="Página Restrita"');
        //modifca o HEADER, indicando o código de não autorizado
        header('HTTP/1.0 401 Unauthorized');
        //exibe mensagem de erro em json
        echo json_encode(["mensagem" => "Authenticacao necessária"]);
        //para a execução do script
        exit;
    //caso contrário,     
    }elseif ($_SERVER['PHP_AUTH_USER'] == 'admin' 
             && $_SERVER['PHP_AUTH_PW'] == 'admin'){
        echo json_encode(["mensagem" => "Bem-vindo!";
    }

