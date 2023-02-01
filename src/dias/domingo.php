<?php

namespace src\opcao1\dias;

use src\opcao1;

class domingo implements semana{
    public function dia($feriado): string{
        if($feriado == 1){
            return "Acabou o fim de semana e o feriado é inutil";
        }

        if($feriado < 0 || $feriado > 1){
            return "Feriado inválido";
        }
        
        return "Acabou o fim de semana e não é feriado";
    }
}