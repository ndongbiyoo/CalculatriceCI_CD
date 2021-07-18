<?php

class Table_multiplicationTest extends \PHPUnit\Framework\TestCase
{
    public function test_get_set_multiplicateur()
    {
        $temp = new \App\Modeles\Table_multiplication;
        $temp->set_multiplicateur(99);
        $this->assertEquals(99, $temp->get_multiplicateur());
    }
}
