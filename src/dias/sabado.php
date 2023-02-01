<?php

namespace src\opcao1\dias;


class sabado implements semana{
    public function dia($feriado): string{
        if($feriado == 1){
            return "Comceçou o fim de semana é feriado";
        }

        if($feriado < 0 || $feriado > 1){
            return "Feriado inválido";
        }
        
        return "Comceçou o fim de semana não é feriado";
    }
}