<!-- Objetivo: arquivo de rota genérico para receber todas as requisições da view(dados de um form, listagem de dados, ação de excluir ou atualizar) 
        e enviar/receber para(da) a controller; autora: Carolina Silva; data criação: 04/03/2022; versão: 1.0 
-->

<?php

    $action = (string) null;
    $component = (string) null;

    //inicialmente devemos identificar através de qual method é a requisição do form, nesse caso se é o method post
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //recebendo dados via URL para saber quem está solicitando e qual ação será realizada
        $component = strtoupper($_GET['component']);
        $action = $_GET['action'];

        //estrutura condicional para identificarmos quem está fazendo a requisição para a router
        switch ($component) {
            case 'CONTATOS':
                echo('chamando a controller');
                break;      
        }

    }



?>