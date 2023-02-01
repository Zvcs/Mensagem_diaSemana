<?php

namespace src\opcao1\dias;

class sexta implements semana{
    public function dia($feriado): string{
        if($feriado == 1){
            return "É sexta e é feriado";
        }

        if($feriado < 0 || $feriado > 1){
            return "Feriado inválido";
        }
        
        return "É sexta e não é feriado";
    }
}