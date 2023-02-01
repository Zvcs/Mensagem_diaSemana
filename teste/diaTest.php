<?php

namespace src\opcao1\teste;

use src\opcao1\recuperaMensagem;
use src\opcao1\dias\{segunda, terca, quarta, quinta, sexta, sabado, domingo};
use PHPUnit\Framework\TestCase;


class diaTest extends TestCase{

    public function testdiaUtil(){
        $nferiado = 0;

        $msg = new recuperaMensagem();
        

        $retorno = $msg->Mensagem(new quarta(), $nferiado);

        $this->assertEquals('Meio da semana e não é feriado', $retorno);
    }

    public function testDiaUtilFeriado(){
        $feriado = 1;

        $msg = new recuperaMensagem();

        $retorno = $msg->Mensagem(new quinta(), $feriado);

        $this->assertEquals('Quase sexta e é feriado', $retorno);
    }


    public function testFeriadoInvalido(){
        $feriado = 5;

        $msg = new recuperaMensagem();

        $retorno = $msg->Mensagem(new segunda(), $feriado);

        $this->assertEquals('Feriado inválido', $retorno);
    }

    public function testEsperaFalha(){
        $feriado = 0;

        $msg = new recuperaMensagem();

        $retorno = $msg->Mensagem(new Segunda(), $feriado);

        $this->assertEquals('Começou a semana e não é feriado', $feriado);
    }
}