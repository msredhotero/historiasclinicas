<?php
class BD
{
	private $servidor='localhost';
	private $usuario='root';
	private $password='';
	private $base_datos='fundacion';
	private $link;
	private $stmt;
	private $array;
	static $_instance;

	private function __construct()
	{
		$this->conectar();
	}

	private function __clone(){}

	public static function getInstance()
	{
		if (!(self::$_instance instanceof self))
		{
			self::$_instance=new self();
		}
		return self::$_instance;
	}
	private function conectar()
	{
		$this->link=mysql_connect($this->servidor, $this->usuario, $this->password);
		mysql_select_db($this->base_datos,$this->link);
		@mysql_query("SET NAMES 'utf8'");
	}
	public  function extraerDatos($consulta)
	{
		$result=mysql_query($consulta,$this->link)or die("");
		return  $result;
	}
	public function insertarDatos($registro)
	{
		$error = 0;
		mysql_query("BEGIN");
		$result=mysql_query($registro,$this->link);
		if(!$result){
			$error=1;
		}
		if($error==1){
			mysql_query("ROLLBACK");
			return false;
		}
		 else{
			mysql_query("COMMIT");
			return true;
		}
	}
	public function insertarDatos2($registro){
		mysql_query($registro);
	}
}
?>