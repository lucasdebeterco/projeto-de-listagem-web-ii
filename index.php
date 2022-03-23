<?php
require('autoload.php');

GLOBAL $conn;
$conn = new Conexao();
// $result = $conn->getSelect("SELECT * FROM pessoa");
// echo $result->nome;

$metaCharset = new Meta("UTF-8");
$metaHttEquiv = new Meta(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Meta(null, "viewport", null, "width=device-width, initial-scale=1.0");

$title = new Title("Minha Página");

$linkCss = new LinkCss("css/style.css","stylesheet", "","");
$linkBootstrap = new LinkCss("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css","stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl","anonymous");

$head = new Head();
$head->addElement($metaCharset);
$head->addElement($metaHttEquiv);
$head->addElement($metaName);
$head->addElement($linkCss);
$head->addElement($linkBootstrap);
$head->addElement($title);


$body = new Body("body");

$container = new Div("container");

$barra = new Div("row");
$conteudoBarra = new Div("col bg-primary");
$texto = new Texto("olá mundo");
$conteudoBarra->addElement($texto);
$barra->addElement($conteudoBarra);

$areaprincipal = new Div("row");

$dados_menu = $conn->getSelect("SELECT * FROM menu");
$menu = new Menu(new Div("navbar navbar-dark navbar-expand-lg bg-dark"), $dados_menu);
//$menu->insertIntoDb('HOME', 'ACAO', 'colunas', 'sqltabela');

$miolo = new Div("col-sm-10 bg-danger");

function object_to_array($obj) {
    $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
    foreach ($_arr as $key => $val) {
        $val = (is_array($val) || is_object($val)) ? object_to_array($val) : $val;
        $arr[$key] = $val;
    }
    return $arr;
}

if (isset($_GET["pagina"])) {
    //montar a tabela de dados
    $consulta_dados =
        $conn->getSelect("select * from menu where acao = '?pagina={$_GET['pagina']}'");
    $dados_tabela = $conn->getSelect($consulta_dados[0]->sqltabela);

    $colunas = explode(",",$consulta_dados[0]->colunas);
    for ($i=0;$i<=count($colunas)-1;$i++) {
        @$pagina .= $colunas[$i]."   ";
    }
    $pagina .= "<br>";
    foreach($dados_tabela as $valor) {
        for ($i=0;$i<=count($colunas)-1;$i++) {
            $obj_array = get_object_vars($valor);
            $array_keys = array_keys($obj_array);
            $pagina .= $obj_array[$array_keys[$i]]."   ";
        }
        $pagina .= "<br>";
    }
    //$pagina = $_GET["pagina"];
} else  {
    $pagina = "Selecione uma das opções no menu";
}
$miolo->addElement($pagina);

$areaprincipal->addElement($menu);
$areaprincipal->addElement($miolo);

$container->addElement($barra);
$container->addElement($areaprincipal);

$body->addElement($container);

$html = new Html("pt-br", $head, $body);

echo $html;
?>
