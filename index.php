<?php
require_once 'app/core/core.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ErrorController.php';
require_once 'app/model/Postagem.php';


// puxa a estrutura e joga numa var 
$template = file_get_contents('app/template/estrutura.html');


ob_start();
$core = new Core();
$core->start($_GET);

$saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area}}', $saida, $template);

echo $tplPronto;