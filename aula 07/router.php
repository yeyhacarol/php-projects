<!-- Objetivo: arquivo de rota genérico para receber todas as requisições da view(dados de um form, listagem de dados, ação de excluir ou atualizar) 
        e enviar/receber para(da) a controller; autora: Carolina Silva; data criação: 04/03/2022; última modificação: 18/03/2022; versão: 1.0 
-->

<?php

$action = (string) null;
$component = (string) null;

//inicialmente devemos identificar através de qual method é a requisição do form, nesse caso ambas
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET') {

    //recebendo dados via URL para saber quem está solicitando e qual ação será realizada
    $component = strtoupper($_GET['component']);
    $action = strtoupper($_GET['action']);

    //estrutura condicional para identificarmos quem está fazendo a requisição para a router
    switch ($component) {
        case 'CONTATOS':
            //importando a controller
            require_once('./controller/controllerContatos.php');

            //verificando o tipo de ação requerida
            if ($action == 'INSERIR') {
                //chamar a função de inserir da controller
                $promessa = inserirContato($_POST);
                /*verificando o tipo de dado retornado. se for um booleano, verificará se é verdadeiro e emitirá uma mensagem de sucesso,
                  caso contrário, verificará se é um array nesse caso emitirá uma mensagem de erro */
                if(is_bool($promessa)) {
                    if($promessa) {
                        echo("<script>
                            alert('Registro inserido com sucesso!') 
                            window.location.href = 'index.php'; //para que o alert após fechado retorne para a página ao invés de ficar numa página branca 
                        </script>");
                    }  
                } elseif (is_array($promessa)) {
                    echo("<script>
                            alert('".$promessa['message']."') 
                            window.history.back(); //para que quando retorne a página anterior, os dados inseridos ainda estejam nos campos 
                        </script>");
                }
            } elseif ($action == 'DELETAR') {
                //recebendo via get(url) o id do registro que deve ser excluído, atráves do link da imagem que foi acionado na index
                $idContato = $_GET['id'];

                $promessa = deletarContato($idContato);
                if(is_bool($promessa)) {
                    if($promessa) {
                        echo("<script>
                            alert('Registro excluído com sucesso!') 
                            window.location.href = 'index.php'; 
                        </script>"); 
                    } 
                } elseif (is_array($promessa)) {
                    echo("<script>
                            alert('".$promessa['message']."') 
                            window.history.back(); 
                        </script>");
                }
            }

            break;
    }
}



?>