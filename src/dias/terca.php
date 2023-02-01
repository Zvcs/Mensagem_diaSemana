<?php

namespace src\opcao1\dias;


class terca implements semana{
    public function dia($feriado): string{
        if($feriado == 1){
            return "Quase meio da semana e é feriado";
        }

        if($feriado < 0 || $feriado > 1){
            return "Feriado inválido";
        }
        
        return "Quase meio da semana e não é feriado";
    }
}