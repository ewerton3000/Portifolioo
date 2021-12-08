<?php
class Conexao
{
	private static $conexao;

	private function __construct(){}

	public static function getInstance(){

		if(is_null(self::$conexao)){
			self::$conexao = new \PDO('mysql:host=localhost;port=3306;db=cadastro', 'root', '');
			self::$conexao->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
			self::$conexao->exec('set names utf8');

			echo"Falha na conexão com o banco de dados";
		}
		return self::$conexao;
		echo"Conexão feita com sucesso !!!";
	}

}
?>