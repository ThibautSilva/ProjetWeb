<?php
  include_once('SiteControler.php') ;
  $control = new SiteControler() ;
  $control->callAction($_GET) ;
?>
