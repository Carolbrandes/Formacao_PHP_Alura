<?php

use GuzzleHttp\Client;
use src\BuscadorCursos;
use Symfony\Component\DomCrawler\Crawler;

require 'vendor/autoload.php';
require 'src/buscadorCursos.php';


$client = new Client(['base_uri' => 'https://www.alura.com.br/' ]);

$crawler = new Crawler();

$buscador = new BuscadorCursos($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso){
        echo $curso . PHP_EOL;
}

