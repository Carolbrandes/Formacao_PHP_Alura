<?php

function load($namespace){
        $namespace = str_replace("\\", DIRECTORY_SEPARATOR, $namespace);

        $classes = __DIR__ . "/" . $namespace . ".php";

        return include_once $classes;
}

spl_autoload_register(__NAMESPACE__ . "\load");

