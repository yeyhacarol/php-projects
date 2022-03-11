<!-- Objetivo: arquivo responsável pela manipulação de dados de contatos. Este arquivo fará a ponte entre a view e a model; 
    autora: Carolina Silva; data de criação: 04/03/2022; última modificação: 11/03/2022; versão: 1.0 
-->

<?php
    //função para receber os dados da view e encaminhar para a model (inserir)
    function inserirContato($dadosContato) {
        //verificando se o objeto $dadosContato não está vazio
        if (!empty($dadosContato)) {
            //validando se as caixas de texto de nome e celular não estão vazias, pois o preenchimento é obrigatório no banco de dados
            if (!empty($dadosContato['txtNome']) && !empty($dadosContato['txtCelular']) && !empty($dadosContato['txtEmail'])) {
                /*criação do array que contém dados que serão encaminhados para a model para inserção deles no bd.
                 é importante criar o array conforme as necessidades do bd e de acordo com a nomenclatura utilizada nele*/
                $arrayDados = array (
                    "nome"     => $dadosContato['txtNome'],
                    "telefone" => $dadosContato['txtTelefone'],
                    "celular"  => $dadosContato['txtCelular'],
                    "email"    => $dadosContato['txtEmail'],
                    "obs"      => $dadosContato['txtObs']
                );
    
            } else {
                echo ('dados incompletos');
            }
        }

        //importar arquivo de manipulação de dados do bd
        require_once('model/bd/contato.php');
        insertContato($arrayDados);
    }

    //função para receber os dados da view e encaminhar para a model (atualizar)
    function atualizarContato() {

    }

    //função para realizar a exclusão de um contato (excluir)
    function deletarContato() {
        
    }

    //função para solicitar os dados da model e encaminhar a lista de contatos para a view (inserir)
    function listarContato() {

    }


?>