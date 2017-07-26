<?php
if($_POST) {

  require('core/core.php');


  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {

    case 'login':
      require('core/bin/ajax/login.php');
    break;
    case 'reg':
      require('core/bin/ajax/reg.php');
    break;
        case 'buscar':
      require('core/bin/ajax/buscar.php');
    break;
    case 'list':
      require('core/bin/ajax/list.php');
    break;

    default:
      header('location: index.php');
    break;
  }

} else {
  header('location: index.php');
}
