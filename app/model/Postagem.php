<?php

class Postagem {

  public static function selecionaTodos() {
    $con = new PDO('mysql: host=localhost; dbname=blogdocrud;', 'root', '');
    var_dump($con);
  }
}
