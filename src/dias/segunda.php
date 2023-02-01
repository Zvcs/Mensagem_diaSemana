<?php

namespace src\opcao1\dias;


class segunda implements semana{
    public function dia($feriado): string{
        if($feriado == 1){
            return "Começou a semana e é feriado";
        }

        if($feriado < 0 || $feriado > 1){
            return "Feriado inválido";
        }
        
        return "Começou a semana e não é feriado";
    }
}