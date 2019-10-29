<?php

function load ($namespace) {
      $namespace = str_replace("\\", "/", $namespace);

      $caminhoArquivo = __DIR__ . "/" . $namespace . ".php";

  return include_once $caminhoArquivo;
}

spl_autoload_register(__NAMESPACE__ . "\load");