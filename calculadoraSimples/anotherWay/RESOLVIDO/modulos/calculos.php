<?php
/* Objetivo: arquivo de funções matemáticas; autor: Carolina Silva; data de criação: 04/02/2022; versão: 1.0 */

//Criando uma função para calcular as operações matemáticas
function operacaoMatematica($numero1, $numero2, $operacao)
{
    //Declaraçã de variaveis locais da função
    $num1 = (float) $numero1;
    $num2 = (float) $numero2;
    $result = (float) 0;
    $tipoCalculo = (string) $operacao;

    switch ($tipoCalculo) {
        case "SOMAR":
            $result = $num1 + $num2;
            break;
        case "SUBTRAIR":
            $result = $num1 - $num2;
            break;
        case "MULTIPLICAR":
            $result = $num1 * $num2;
            break;
        case "DIVIDIR":
            if ($num2 == 0)
                echo (ERRO_MSG_DIVISAO_ZERO);
            else
                $result = $num2 / $num2;

            break;
        default:
            //Processamento caso não entre em nenhuma das opções
    }

    /* round() e number_format() - permitem limitar a quant. de casas decimais de um valor, além de arredondar o valor quando necessário */

    //$resultado = number_format($resultado, 2);
    $result = round($result, 2);

    return $result;
}
