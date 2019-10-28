<?php

include "autoload.php";
use classes\funcionario\Designer;
use classes\funcionario\Diretor;
use classes\sistemaInterno\GerenciadorBonificacao;
use classes\funcionario\ListaFuncionario;


$diretor = new Diretor("Manuel", "222.222.222-22", 25000, 55);
$diretor->definirSenha("123");
$diretor->alterarNome("Manuel Alves");

$designer = new Designer("Ana Claudia", "111.111.111-11", 6000, 40);


$gerenciador = new GerenciadorBonificacao();
$gerenciador->registrarBonificacao($diretor, "123", $designer);
$gerenciador->registrarBonificacao($diretor, "123", $diretor);




?>

<h1>Bonificações:</h1>
<p>Total: R$ <?php echo $gerenciador->getTotalBonificacoes(); ?></p>























