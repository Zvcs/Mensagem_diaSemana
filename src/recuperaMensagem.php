<?php

namespace src\opcao1;

use src\opcao1\dias\semana;

class recuperaMensagem{
    public function Mensagem(semana $dia, $feriado): string{
        return $dia->dia($feriado);
    }
}