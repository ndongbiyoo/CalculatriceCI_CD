<?php 

namespace App\Modeles;

class Calculatrice
{
	protected $operant1;
	protected $operant2;
	
	protected $operateur;

	public function set_operant1($valeur)
	{
		$this->operant1 = $valeur;
	}

	public function set_operant2($valeur)
	{
		$this->operant2= $valeur;
	}

	public function get_operant1()
	{
		return $this->operant1;
	}

	public function get_operant2()
	{
		return $this->operant2;
	}

	public function set_operateur($valeur)
	{
		if($valeur == '+' || $valeur == '-' || $valeur == '*' || $valeur == '/')
		{
			$this->operateur = $valeur;
		}
		else
		{
			$this->operateur = '';
		}
	}

	public function get_operateur()
	{
		return $this->operateur;
	}

	public function addition()
	{
		return $this->operant1+$this->operant2;
	}

	public function soustraction()
	{
		return $this->operant1 - $this->operant2;
	}

	public function multiplication()
	{
		return $this->operant1 * $this->operant2;
	}

	public function division()
	{
		if ($this->operant2 !=0)
		{
			if($this->operant1 != 0)
			{
				return $this->operant1/$this->operant2;
			}
			else
			{
				return 'boucle';
			}
		}
		else
		{
			return 'On ne divise pas par 0';
		}
	}

}