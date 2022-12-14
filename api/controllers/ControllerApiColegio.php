<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ControllerApiColegio extends ControllerApiBase {
    public function getNomeColegio(Request $request, Response $response, array $args) {
        $body = $request->getParsedBody();
        
        $colcodigo = $body["colcodigo"];

        $sSql = "SELECT colnome FROM tbcolegio WHERE colcodigo = $colcodigo";

        $aDados = $this->getQuery()->select($sSql);
        
        return $response->withJson($aDados, 200);
    } 
}
