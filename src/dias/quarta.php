<?php

namespace src\opcao1\dias;


class quarta implements semana{
    public function dia($feriado): string{
        if($feriado == 1){
            return "Meio da semana e é feriado";
        }

        if($feriado < 0 || $feriado > 1){
            return "Feriado inválido";
        }
        
        return "Meio da semana e não é feriado";
    }
}