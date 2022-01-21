<?php
    /*print_r('bláblá');
        echo('bláblá'); */

     /*isset() -> permite verificar a existência de uma variável ou objeto.
     Validação para identificar se o botão foi clicado e disponibilizado na ação do GET */   
    if (isset($_GET['btnSalvar'])) {

        //recuperando dados via get do formulário
        $nome = $_GET['txtNome'];
        $cidade = $_GET['sltCidade'];
        $sexo = $_GET['rdoSexo'];
        $observacao = $_GET['txtObs'];
        /*variáveis setadas para fazermos uma tratativa dos items que foram selecionados. Outra maneira de resolver o erro de variável não existente
        seria criar uma estrutura de condição maior utilizando else*/
        $idiomaPortugues = null;
        $idiomaIngles = null;
        $idiomaEspanhol = null;

        //tratamento para recuperar os checkbox selecionados no formulário
        if(isset($_GET['chkPortugues'])) {
            $idiomaPortugues = $_GET['chkPortugues'];
        }

        if(isset($_GET['chkIngles'])) {
            $idiomaIngles = $_GET['chkIngles'];
        }

        if(isset($_GET['chkEspanhol'])) {
            $idiomaEspanhol = $_GET['chkEspanhol'];
        }


        //mostrando no navegador as variáveis 
        echo($nome . '<br>');
        echo($cidade . '<br>');
        echo($sexo . '<br>');
        echo($idiomaPortugues . ' ' . $idiomaIngles . ' ' . $idiomaEspanhol . '<br>');
        echo($observacao . '<br>');
    }

?>



<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
    textarea {
        resize: none;
    }
    </style>
</head>

<body>
    <!-- method="GET" -> permite retirar os dados dos formulários e disponibilzar na url da página  
            method="POST" -> permite retirar os dados dos formulários e disponibilzar em variáveis locais
            action="" -> utilizada para especificar em qual arquivo ou página será disponibilizado do formulário -->
    <form name="frmCadastro" , method="GET" , action="formularios.php">
        Nome: <input type="text" name="txtNome" size="50" maxlength="30"><br><br>
        Cidade:
        <!-- select="" -> para criar um comboBox 
             option="" -> para adicionarmos itens na lista
             value="" -> identificador do item para o back-end (obrigatório!) -->
        <select name="sltCidade">
            <!-- a opção selected define esse item como o primeiro selecionado da lista -->
            <option value="" selected>Selecione um item</option>
            <option value="itapevi">Itapevi</option>
            <option value="jandira">Jandira</option>
            <option value="barueri" selected>Barueri</option>
            <option value="carapicuiba">Carapicuíba</option>
            <option value="osasco">Osasco</option>
        </select>
        Sexo:
        <!-- para que o type="radio" permita a escolha única é necessário que o name="" possua o mesmo valor em todos os elementos. 
             É possível utilizarmos a opção checked para que o item esteja sempre selecionado inicialmente -->
        <input type="radio" name="rdoSexo" value="f">Feminino
        <input type="radio" name="rdoSexo" value="m">Masculino
        <br><br>
        Idioma:
        <input type="checkbox" name="chkPortugues" value="pt" checked>Português
        <input type="checkbox" name="chkIngles" value="en">Inglês
        <input type="checkbox" name="chkEspanhol" value="es">Espanhol
        <br><br>
        <p>Observação:</p>
        <textarea name="txtObs" cols="30" rows="5"></textarea>
        <div><input type="submit" name="btnSalvar" value="Salvar"></div>
    </form>
</body>

</html>