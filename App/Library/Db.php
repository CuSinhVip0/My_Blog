<?php

class Db
{
	public $connect = null;
	public function __construct()
	{
		$this->connect = new PDO("mysql:host=localhost;dbname=doanthweb", "root", "");
		$this->connect->query('set names utf8');
	}

	function selectQuery($sql, $arr = array())
	{
		$stm = $this->connect->prepare($sql);
		$stm->execute($arr);
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
	function updateQuery($sql, $arr = array())
	{
		$stm = $this->connect->prepare($sql);
		$stm->execute($arr);
		return $stm->rowCount();
	}
}
