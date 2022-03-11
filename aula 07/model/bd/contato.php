<!-- 
    Objetivo: arquivo responsável pela manipulação dos dados dentro do banco de dados; autora; Carolina Silva; data de crição: 11/03/2022; versão: 1.0 
-->

<?php
    //import do arquivo que estabelece a conexão com o banco de dados
    require_once('conexaoMySql.php');

    //função para inserção no banco de dados
    function insertContato($dadosContato) {
        //abrir a conexão com o banco de dados, só assim poderemos fazer a inserção
        $conexao = conexaoMySql();

        //variável para armazenar o script do banco
        $sql = "insert into tblcontatos
                 (nome,
                  telefone,
                  celular,
                  email,
                  obs)
                  
                values
                 ('".$dadosContato['nome']."',
                  '".$dadosContato['telefone']."',
                  '".$dadosContato['celular']."',
                  '".$dadosContato['email']."',
                  '".$dadosContato['obs']."');";

        //executar o script no banco. _query é a função para encaminhar o script para o banco
        mysqli_query($conexao, $sql);
    }

    //função para atualizar no banco de dados
    function updateContato() {

    }

    //função para excluir no banco de dados
    function deleteContato() {
        
    }

    //função para listar todos os contatos do banco de dados
    function selectAllContatos() {

    }
?>