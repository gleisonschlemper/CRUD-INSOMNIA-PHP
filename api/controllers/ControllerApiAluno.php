<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ControllerApiAluno extends ControllerApiBase {
    public function getAluno(Request $request, Response $response, array $args) {
        $alunoSql = "SELECT * FROM tbaluno ORDER BY 1";

        $colegioSql = "SELECT * FROM tbcolegio ORDER BY 1";

        $aAlunos = $this->getQuery()->selectAll($alunoSql);
        $aColegios = $this->getQuery()->selectAll($colegioSql);
        
        $aDados = [];

        foreach($aAlunos as $oAluno){
            foreach($aColegios as $oColegio){
                if($oColegio["colcodigo"] == $oAluno["colcodigo"]){
                    $iCodigo = $oAluno["alucodigo"];
                    $sNome = $oAluno["alunome"];
                    $sColegio = $oColegio["colnome"];
                    $sMatricula = $oAluno["alumatricula"];
                    $sUsuario = $oAluno["alusuario"];
                    $sSenha = $oAluno["alusenha"];
                    $sData = $oAluno["aludata"];
                    $sHora = $oAluno["aluhora"];

                    $array = array(
                        "codigo"=>$iCodigo,
                        "nome"=>$sNome,
                        "colegio"=>$sColegio,
                        "matricula"=>$sMatricula,
                        "usuario"=>$sUsuario,
                        "senha"=>$sSenha,
                        "data"=>$sData,
                        "hora"=>$sHora
                    
                    );
                    $aDados[] =  $array;
                }
            }
        }
        
        return $response->withJson( $aDados, 200);
    } 
}
