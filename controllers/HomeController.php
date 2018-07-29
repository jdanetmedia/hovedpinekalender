<?php

require('controllers/AttackController.php');

class HomeController {

  public function __construct() {
    $attackObj = new AttackController();
    $attacks = $attackObj->getAllAttacks(1);
    return $attacks;
  }

}

$home = new HomeController();
