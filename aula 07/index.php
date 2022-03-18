<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro </title>
        <!-- to change the head icon -->
        <link rel="icon" type="image/x-icon" href="https://as1.ftcdn.net/v2/jpg/01/72/22/52/1000_F_172225270_QtBzpfx2g0I78X1XZ2VxL5FgTeAGt4p9.jpg">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
       
        <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Contatos </h1>    
            </div>

            <div id="cadastroInformacoes">
                <form  action="router.php?component=contatos&action=inserir" name="frmCadastro" method="post" >
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtNome" value="" placeholder="Digite seu Nome" maxlength="100">
                        </div>
                    </div>
                                     
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Telefone: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="tel" name="txtTelefone" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Celular: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="tel" name="txtCelular" value="">
                        </div>
                    </div>
                   
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Email: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="email" name="txtEmail" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Observações: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <textarea name="txtObs" cols="50" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="Salvar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div id="consultaDeDados">
            <table id="tblConsulta" >
                <tr>
                    <td id="tblTitulo" colspan="6">
                        <h1> Consulta de Dados.</h1>
                    </td>
                </tr>
                <tr id="tblLinhas">
                    <td class="tblColunas destaque"> Nome </td>
                    <td class="tblColunas destaque"> Celular </td>
                    <td class="tblColunas destaque"> Email </td>
                    <td class="tblColunas destaque"> Opções </td>
                </tr>
                
                <?php
                    require_once('controller/controllerContatos.php');
                    $listContato = listarContato();
                    foreach($listContato as $dados) {

                    
                ?>
               
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?= $dados['nome']?></td>
                    <td class="tblColunas registros"><?= $dados['celular']?></td>
                    <td class="tblColunas registros"><?= $dados['email']?></td>
                   
                    <td class="tblColunas registros">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                            <img src="img/search.png" alt="Visualizar" title="Visualizar" class="pesquisar">
                    </td>
                </tr>
                <?php 
                
                }

                ?>
            </table>
        </div>
    </body>
</html>