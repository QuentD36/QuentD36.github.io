<?php

require_once('include/configuration.php');


Autoloader::loadClasses();

if (!isset($_REQUEST['gestion'])) {

    $_REQUEST['gestion'] = 'member';

}

$oRouter = new $_REQUEST['gestion']($_REQUEST);

$oRouter->action();