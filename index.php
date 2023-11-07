<?php
require_once 'app/core/core.php';


$template = file_get_contents('app/template/estrutura.html');
echo $template;

$core = new Core();
$core->start($_GET);
