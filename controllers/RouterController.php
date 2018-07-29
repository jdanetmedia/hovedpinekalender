<?php

class RouterController {

  static function router($page) {
    $pages = array(
      'home',
      'profile',
      'register',
      'add'
    );

    if(in_array($page, $pages)) {
      include('pages/' . $page . '.php');
    } else {
      include('pages/404.php');
    }
  }

}
