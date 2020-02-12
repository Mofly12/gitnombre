<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\complejo;

class complejoTest extends TestCase
{
    public function test_suma()
    {
        $complejo1 = new Complejo();
        $complejo1->setReal(2)->setImg(3);
        $complejo2 = new Complejo();
        $complejo2->setReal(4)->setImg(5);
        $complejoResultado = new Complejo();
        $complejoResultado->setReal(6)->setImg(8);
        $complejoComparador = $complejo1->suma($complejo2);
        $this->assertEquals($complejoResultado, $complejoComparador);
        $this->assertEquals($complejoResultado,$complejo2->suma($complejo1));

    }
    public function test_opuesto(){
        /**
         * @var Complejo $complejo1
         */
        $complejo1 = new Complejo();
        $complejoOpuesto = new Complejo();
        $complejo1->setReal(4)->setImg(2);
        $complejoOpuesto = $complejo1->opuesto();
        $complejoResultado = new Complejo();
        $complejoResultado->setReal(-4)->setImg(-2);
        $this->assertEquals($complejoResultado,$complejoOpuesto);
    }

    public function test_resta(){
        $complejo1 = new Complejo();
        $complejo2 = new Complejo();
        $complejo1->setReal(4)->setImg(4);
        $complejo2->setReal(4)->setImg(4);
        $complejoResultado = new Complejo();
        $complejoResultado = $complejo1->resta($complejo2);
        $complejoEsperado = new complejo;
        $complejoEsperado->setReal(0)->setImg(0);
        $this->assertEquals($complejoEsperado,$complejoResultado);


    }

     

}
