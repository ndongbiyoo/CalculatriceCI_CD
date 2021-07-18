<?php

class CalculatriceTest extends \PHPUnit\Framework\TestCase
{
    
    public function test_set_get_operant1()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant1(4);
        $temp->set_operant1(12);
        $this->assertEquals(12, $temp->get_operant1());
    }

    public function test_set_get_operant2()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant2(-15);
        $this->assertEquals(-15, $temp->get_operant2());
    }

    public function test_addition()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant1(25);
        $temp->set_operant2(40);
        $this->assertEquals(65, $temp->addition());
    }

    public function test_soustraction()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant1(0);
        $temp->set_operant2(-21);
        $this->assertEquals(21, $temp->soustraction());
    }

    public function test_multiplication()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant1(-22);
        $temp->set_operant2(-2);
        $this->assertEquals(44, $temp->multiplication());
    }

    public function test_division_simple()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant1(-22);
        $temp->set_operant2(-2);
        $this->assertEquals(11, $temp->division());
    }

    public function test_division_en_boucle()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant1(0);
        $temp->set_operant2(-2);
        $this->assertEquals('boucle', $temp->division());
    }

    public function test_division_impossible()
    {
        $temp = new \App\Modeles\Calculatrice;
        $temp->set_operant1(-22);
        $temp->set_operant2(0);
        $this->assertEquals('On ne divise pas par 0', $temp->division());
    }

    public function test_set_get_operateur()
    {
        $temp = new App\Modeles\Calculatrice;
        $temp->set_operateur('+');
        $this->assertEquals('+', $temp->get_operateur());
    }

    public function test_set_get_operateur_mauvais()
    {
        $temp = new App\Modeles\Calculatrice;
        $temp->set_operateur('?');
        $this->assertEquals('', $temp->get_operateur());
    }

    
}
