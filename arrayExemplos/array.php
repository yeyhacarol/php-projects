<?php
    //criando array e atribuindo valores na sua instância
    $nomes = array('Joana D', 'Elizabeth', 'Diana');

    /* Não é possível printar arrays com o echo, apenas elementos comuns; funcionará apenas se utilizarmos para descrever o valor do índice do array */
        echo($nomes);
        echo($nomes[0]); /* exibirá o valor 'Joana D' */

    /* print_r exibe o array de maneira suscinta, sem detalhes */
        print_r($nomes);

    /* var_dumb exibe o array em detalhes: n° de elementos, posição, tipo de dados, qtde. de caracteres e conteúdo */
        var_dump($nomes);
    
    /* um único array pode armazenar mais de um tipo de dado do qual a própria linguagem php atribui corretamente a tipagem desses dados */
        $dados = array('Jonas', 24, 1850.65);
        var_dump($dados); /* imprimirá que 'Jonas' é string, 24 é int e 1850.65 é float */

    /* é possível instanciar arrays sem valores e atribuí-los, individualmente, mais tarde; nesse caso podemos definir o índice dos elementos */
        $nomesFuncionarios = array();

        $nomesFuncionarios[0] = 'Luiza';
        $nomesFuncionarios[2] = 32; /* o array possui apenas dois elementos de índices 0 e 2, excluindo o 1 */


    //extraindo dados dos arrays
        $nomesClientes = array('Núbia', 'Renata', 'Rute');

        /* while() */
        $cont = 0;
        /* count() nos permite saber quantos elementos existem no array. <= resultará em erro, pois apesar de haver três itens na lista
                                                                    o índice percorrerá apenas até [2], afinal a ordem se inicia em [0]*/
        while ($cont < count($nomesClientes)) {
            echo($nomesClientes[$cont]);
            $cont++;
        }

        /* for() */
        for ($cont=0; $cont < count($nomesClientes); $cont++) { 
            echo($nomesClientes[$cont]);
        }

        /* foreach(). O elemento se repetirá dependendo da quantidade de elementos do vetor. É dinâmico e mais compacto! $cliente representa cada item de $nomesClientes */
        foreach($nomesClientes as $cliente) {
            echo($cliente);
        }
        
        /* array chave-valor do qual a chamada será pela chave e não pelo índice, as referências são dadas pelas "colunas"(chaves), 
                                                        ou seja, os primeiros dados das linhas: "nome", "descricao" etc */
        $produtos = array(
            "nome"           => "Teclado",
            "descricao"      => "Teclado cor preta e cinza", 
            "qtde"           => 50, 
            "valorUnitario"  => 80.45,
            "cor"            => "Preto"
        );

        echo($produtos["nome"]);

        /* array de índice, chave e valor. É possível atribuir chaves aos array substituindo os índices; a chamada se modifica para a condição de chave ["listaTeclados"] */
        $produtosInformatica = array(
          /* "listaTeclados" => */  array (
                "nome"      => "Teclado",
                "descricao" => "Teclado rgb",
                "cor"       => "Preto",
                "valor"     => 99.99,
                "qtde"      => 20
            ), 
            array (
                "nome"      => "Mouse",
                "descricao" => "Mouse com cinco botões",
                "cor"       => "Cinza",
                "valor"     => 79.80,
                "qtde"      => 100
            )
        );

        var_dump($produtosInformatica); /* imprimirá na tela um array que possui dois elementos (2), dos quais possuem índice [0] e [1] respectivamente. 
                                                Para acessar os dados dos arrays precisaremos referenciar o índice do array e a chave do elemento da seguinte maneira:
                                                echo($produtosInformatica[0]["nome"]) que resultará em Teclado*/

        //é possível percorrer os arrays para que exiba o valor desejado mesmo se tivermos a referência de chave invés de índice
        foreach($produtosInformatica as $produtos) {
            echo($produtos["nome"]); /* exibirá os nomes de ambos os arrays: Teclado Mouse */
        }

        
?>

