<?php

namespace src\opcao1\dias;


class quinta implements semana{
    public function dia($feriado): string{
        if($feriado == 1){
            return "Quase sexta e é feriado";
        }

        if($feriado < 0 || $feriado > 1){
            return "Feriado inválido";
        }
        
        return "Quase sexta e não é feriado";
    }
}