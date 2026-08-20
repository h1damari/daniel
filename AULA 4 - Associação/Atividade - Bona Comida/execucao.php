<?php

require_once('modelo/Pedido.php');
require_once('modelo/Prato.php');

/*
echo "Número | Nome | Valor (R$)\n";
echo "1 | Camarão à Milanesa | 110,00\n";
echo "2 | Pizza Margherita | 80,00\n";
echo "3 | Macarrão à Carbonara | 60,00\n";
echo "4 | Bife à Parmegiana | 75,00\n";
echo "5 | Risoto ao Funghi | 70,00\n";
*/

$cardapio = array();

array_push($cardapio, new Prato(1, "Camarão à Milanesa", 110.00));
array_push($cardapio, new Prato(2, "Pizza Margherita", 80.00));
array_push($cardapio, new Prato(3, "Macarrão à Carbonara", 60.00));
array_push($cardapio, new Prato(4, "Bife à Parmegiana", 75.00));
array_push($cardapio, new Prato(5, "Risoto ao Funghi", 70.00));

$pedidos = array();

do{

echo "| BONA COMIDA |";
echo "\n1 - Cadastrar\n";
echo "2 - Cancelar\n";
echo "3 - Listar\n";
echo "4 - Total de vendas\n";
echo "0 - Sair\n";
$opcao = readline("escolha uma opçao: ");

    switch ($opcao) {
        case 1:
            $cliente = readline("Nome do passa fome: \n");
            $garcom = readline("Nome do meliante servidor: \n");
                foreach($cardapio as $c){
                    echo $c;
                }
            $prato = (int) readline("\nQual o prato que a vossa alteza deseja degustar? \n");

            $pratoVerificado = null;
            foreach($cardapio as $c){
                if($c ->getNumero() == $prato){
                     $pratoVerificado = $c;
                }
            }

            if($pratoVerificado != null){
                $pedido = new Pedido($cliente, $garcom, $pratoVerificado);
                array_push($pedidos, $pedido);
            } else{
                echo "digita a porra de uma sigla valida\n\n";
            }

            
        break;
        
        case 2:
            $delete = readline("Qual o índice do prato a ser removido? ");
            if(isset($pedidos[$delete]))
                array_splice($pedidos, $delete, 1);
            else 
                echo "Índice inválido!\n\n";
        break;

        case 3:
            foreach($pedidos as $p){
                echo $p;
            }
        break;

        case 4:
            $total = 0;
            foreach($pedidos as $p){
                $total += $p->getPrato()->getValor();
            }
            
            echo "Valor total de todos os pedidos cadastrados: $total";
        break;

        case 0:
            echo "\nSaindo...\n";
        break;

        default:
            echo "escreve direito kkk";
        break;
    }

}while ($opcao != 0);