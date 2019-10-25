<?php


function load($namespace){

    $namespace = str_replace("\\","/",$namespace);

    $caminhoAbsoluto = __DIR__ . "/". $namespace . ".php";

    return include_once $caminhoAbsoluto;
}

// ele vai ser chamado tda vez q um objeto for instanciado, e ele chamara nossa funcao que faz o carregamento das classes.
spl_autoload_register(__NAMESPACE__ . "\load");