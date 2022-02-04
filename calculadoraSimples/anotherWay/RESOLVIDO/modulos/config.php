<?php
/* Objetivo: arquivo responsável por reunir e padronizar todas as variáveis e constantes que serão utilizadas no projeto;
autor: Carolina Silva; data de criação: 04/02/2022; versão: 1.0 */

/* formas de criar constantes:
    define() ou const()*/
define('ERRO_MSG_CAIXA_VAZIA', '<script> alert("Favor preencher todas as caixas!"); </script>');
const ERRO_MSG_OPERACAO_CALC = '<script> alert("Favor escolher uma operação válida"); </script>';
const ERRO_MSG_CARATER_INVALIDO_TEXTO = '<script> alert("Não é possível realizar calculos de dados não numericos!"); </script>';
const ERRO_MSG_DIVISAO_ZERO = '<script> alert("Não é possível realizar divisão, onde o valor 2 é igual a 0!"); </script>';

?>