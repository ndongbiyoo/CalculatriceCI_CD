<?php

namespace App\Modeles;

class Table_multiplication 
{
	protected $multiplicateur;

	public function set_multiplicateur($valeur)
	{
		$this->multiplicateur = $valeur;
	}

	public function get_multiplicateur()
	{
		return $this->multiplicateur;
	}

	public function table2multiplication()
	{
		$table = array();
		$temp = new App\Modeles\Calculatrice;
		$temp->set_operant1($this->get_multiplicateur);
		$temp->set_operant2(0);
		$i = 0;
		$var = 0;
		while($i < 10)
		{
			$temp->set_operant2($i);
			$var = $temp->multiplication();
			$table = $table + $var;
			$i = $i+1;
		}

		return $table;
	}
}