<?php

echo "Escolha um jogo:\n";
echo "1. Mega-Sena\n";
echo "2. Quina\n";
echo "3. Lotomania\n";
echo "4. Lotofácil\n";

    $opcao = readline("Digite o número do jogo: ");
    sleep(1);

        if ($opcao == 1) {
            $jogo = "Mega-Sena";
            $min = 6; $max = 20; $intervalo = [1,60];
            $precoBase = 6.00; $extra = 3.00;
        } elseif ($opcao == 2) {
            $jogo = "Quina";
            $min = 5; $max = 15; $intervalo = [1,80];
            $precoBase = 4.00; $extra = 1.50;
        } elseif ($opcao == 3) {
            $jogo = "Lotomania";
            $min = 50; $max = 50; $intervalo = [0,99];
            $precoBase = 3.00; $extra = 0;
        } elseif ($opcao == 4) {
            $jogo = "Lotofácil";
            $min = 15; $max = 20; $intervalo = [1,25];
            $precoBase = 6.00; $extra = 2.50;
        } else {
            echo1 ("Opção inválida.\n", 3);
            exit;
        }

            echo1 ("Você escolheu: $jogo\n", 50);

            $dezenas = (int) readline("Digite o número de dezenas ($min a $max): ");
            sleep(1);

                if ($dezenas < $min && $dezenas > $max) {
                    echo "Número inválido.\n";
                    exit;
                }

                $quantidade = (int) readline("Quantas apostas deseja gerar? ");
                sleep(1);

                    // calcula preço da aposta
                    if ($jogo == "Lotomania") {
                        $preco = $precoBase; // sempre fixo
                    } else {
                        $preco = $precoBase + ($dezenas - $min) * $extra;
                    }

                    $total = $preco * $quantidade;

                    echo1("\nGerando apostas...\n", 50);
                        sleep(2);
                        for ($i=1; $i<=$quantidade; $i++) {
                            $numeros = range($intervalo[0], $intervalo[1]);
                            shuffle($numeros);
                            $aposta = array_slice($numeros, 0, $dezenas);
                            sort($aposta);

                            echo1(("Aposta $i: ".implode(", ", $aposta)." | Preço: R$ ".number_format($preco,2,',','.')."\n"), 50);
                        }

                        echo1("\nTotal gasto: R$ ".number_format($total,2,',','.')."\n", 50);

    function echo1(string $texto, int $velocidade) {
    $tamanho = strlen($texto);
    for ($i = 0; $i < $tamanho; $i++) {
        echo $texto[$i];
        // pausa em milissegundos
        usleep($velocidade * 1000);
    }
}
