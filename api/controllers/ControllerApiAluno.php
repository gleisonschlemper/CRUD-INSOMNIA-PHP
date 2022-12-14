<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ControllerApiAluno extends ControllerApiBase {
    public function getAluno(Request $request, Response $response, array $args) {
        $sSql = "SELECT * FROM tbaluno ORDER BY 1";

        $aDados = $this->getQuery()->selectAll($sSql);
        
        return $response->withJson($aDados, 200);
    } 
}
