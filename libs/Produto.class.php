<?php
	class Produto {

	//private $container;
	//private $dados;

	//public function __construct($pContainer, $pDados) {
		//$this->container = $pContainer;
		//$this->dados     = $pDados;
	//}

	public function __toString() {
		$menuConteudo = new Ul("navbar-nav");

		foreach ($this->dados as $valor) {
			$link = new Link("localhost:3000/".$valor->acao,$valor->texto,null,'nav-link');
			$menuConteudo->addElement(new Li("nav-item", $link));
		}
		// var_dump($menuConteudo);
		$this->container->addElement($menuConteudo);
		return $this->container->__toString();
	}

	public function insertIntoDb($nome, $valor, $totalEstoque) {
		$sql = "INSERT INTO menu (nome, valor, totalEstoque) values ('{$nome}', '{$valor}', '{$totalEstoque}')";
		$conn = new Conexao();
		$conn->insertInto($sql);
	}
}