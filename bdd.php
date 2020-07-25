<?php
Class Bdd
{
	private $_bdd;
	public function __construct()
	
	{
		try
		{
		$bdd = new PDO('mysql:host=localhost;port=3308;dbname=Portefolio', 'razorback54', 'Fimeki@3');
		$this->_bdd = $bdd;
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	}
	public function getBdd()
	{
		return $this->_bdd;
	}
}
?>