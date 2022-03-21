<?php
	class Conexao {

	private $username = 'root';
	private $password = '';
	private $banco = 'projeto-de-listagem';
	private $host = 'localhost';
	private $conn;

	public function __construct() {
		try {
		$conn = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->username, $this->password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $this->conn = $conn;
		} catch(PDOException $e) {
			echo 'Erro: ' . $e->getMessage();
		}
	}

	public function getConn() {
		return $this->conn;
	}

	public function getSelect($sql) {
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$valores = array();

		while ($valor = $stmt->fetchObject(__CLASS__)) {
			$valores[] = $valor;
		}
		return $valores;
	}

	public function insertInto($sql) {
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
	}	
}