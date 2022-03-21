<?php
	class Menu {

	private $container;
	private $dados;

	public function __construct($pContainer, $pDados) {
		$this->container = $pContainer;
		$this->dados     = $pDados;
	}

	public function __toString() {
		$menuConteudo = new Ul("list-group");

		foreach ($this->dados as $valor) {
			$link = new Link("localhost:3000/".$valor->acao,$valor->texto,null,null);
			$menuConteudo->addElement(new Li("list-group-item", $link));
		}
		// var_dump($menuConteudo);
		$this->container->addElement($menuConteudo);
		return $this->container->__toString();
	}

	public function insertIntoDb($texto, $acao, $colunas, $sqltabela) {
		$sql = "INSERT INTO menu (texto, acao, colunas, sqltabela) values ('{$texto}', '{$acao}', '{$colunas}', '{$sqltabela}')";
		$conn = new Conexao();
		$conn->insertInto($sql);
	}
}