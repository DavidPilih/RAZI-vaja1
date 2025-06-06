<?php

//razred, ki skrbi za povezavo z bazo (Vzorec MVC zagovarja principe OOP)
class Db
{
  private static $instance = NULL;

  //Funkcija getInstance vrnsssade povezavo z bazo. Ob prvem klicu ustvari povezavo in jo shrani v statični spremenljivki. Ob nadaljnjih klicih vrača povezavo iz spomina
  public static function getInstance()
  {
    if (!isset(self::$instance)) {

      self::$instance = mysqli_connect("localhost", "root", "", "news");
      self::$instance->set_charset("UTF8");
    }
    return self::$instance;
  }
}
