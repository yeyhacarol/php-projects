<?php 

//arquivo que ativa os serviços do slim que fará as instâncias so slim
require_once('vendor\autoload.php');

//criando um objeto do slim chamado app para configurarmos os endpoints
$app = new \Slim\App();

//EndPoint: requisição para listar todos os contatos. é assim que criamos os endpoints
$app->get('/contatos', function($request, $response, $args) {
    $response->write('Testando API pelo GET');
});

//EndPoint: requisição para listar contatos pelo id
$app->get('/contatos/{id}', function($request, $response, $args) {

});

//EndPoint: requisição para inserir um novo contato
$app->post('/contatos', function($request, $response, $args) {

});

?>