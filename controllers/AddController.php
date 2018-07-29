<?php

include('controllers/AttackController.php');

class AddController {

  public function __construct() {
    if(isset($_POST['addAttack'])) {
        $attack = new AttackController();
        $attack->addAttack($_POST);
    }
  }

}

$add = new AddController();
