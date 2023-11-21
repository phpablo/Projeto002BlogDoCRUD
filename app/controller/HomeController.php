<?php
class HomeController {
  public function index() {

    try {
      #verifica se exite postagem
      $colecPostagens = Postagem::selecionaTodos();
      var_dump($colecPostagens);
    } catch (Exception $e) {
      # mensagem de erro
      echo $e->getMessage();
    }
  }
}
