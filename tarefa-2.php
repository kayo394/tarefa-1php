<?php

    $segundos = 0; $minutos = 0; $horas = 0; $dias = 0;

    $escolhe = readline('Escolhe um desse \n1-segundos,\n2-minuntos,\n3-horas,\n4-dias?)');

        if($escolhe == 1){
            $cronomentro = readline('Informe quantos segundos você deseja cronomenta!');
            while($segundos < $cronomentro){
                $segundos = $segundos + 1;
                sleep(1);
                echo $segundos . '-';
                if($segundos == $cronomentro){
                    echo "\nNo cronometro deu ' . $segundos . 'de seg, e $escolhe seng";
                    break;
                }
            }
        }
        if($escolhe == 2){
            $cronomentro = readline('Informe quantos minuntos você deseja cronomenta!');
            $escolhe=$cronomentro*60;

            while($minutos < $escolhe){
                $minutos = $minutos + 1;
                sleep(1);
                echo $minutos . '-';
                if($segundos == $escolhe){
                    $minutos = $escolhe/60;
                    echo "No cronometro deu ' . $minutos . 'de min, e $escolhede seng";
                    break;
                }
            }
        } 
        if($escolhe == 3){
            $cronomentro = readline('Informe quantos horas você deseja cronomenta!');
            $cronomentro = ($cronomentro*60)*60;
            while($horas < $cronomentro){
                $segundos = $segundos + 1;
                sleep(1);
                echo $segundos . '-';
                if($segundos == $cronomentro){
                    $minuntos = $cronomentro/60;
                    $horas = ($cronomentro/60)/60;
                    echo "No cronometro deu $horas de horas, e $minuntos de min, e $escolhede seng";
                    break;
                }
            }
        }
        if($escolhe == 4){
            $cronomentro = readline('Informe quantos horas você deseja cronomenta!');
            $cronomentro = (($cronomentro*24)*60)*60;
            while($dias < $cronomentro){
                $segundos = $segundos + 1;
                sleep(0);
                echo $segundos . '-';
                if($segundos == $cronomentro){
                    $minuntos = $cronomentro/60;
                    $horas = ($cronomentro/60)/60;
                    $dias = (($cronomentro/24)/60)/60;
                    echo "No cronometro deu $dias de dias, e $horas de horas, e $minuntos de min, e $segundos seng";
                    break;
                }
            }
        } 
