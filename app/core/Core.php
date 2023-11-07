<?php
class Core {
  public function start($urlGet) {
    $pagina = ucfirst($urlGet['pagina'] . 'Controller');
    echo $pagina;
  }
}
