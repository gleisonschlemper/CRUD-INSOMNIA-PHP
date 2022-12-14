<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ControllerApiColegio extends ControllerApiBase {
    public function getTodosColegio(Request $request, Response $response, array $args) {
        $sSql = "SELECT * FROM tbcolegio ORDER BY 1";

        $aDados = $this->getQuery()->selectAll($sSql);
        
        return $response->withJson($aDados, 200);
    } 
}
