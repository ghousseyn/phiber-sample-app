<?php

require '../vendor/phiber/phiber/library/wire.php';

//Uncomment the next line to use composer autoloader (change the path if necessary)
//require '../vendor/autoload.php';


$phiber = new Phiber\wire('../application/config.php');
/**
 *
 * $phiber->addRoute('/text',function($phiber){
 *
 *    echo 'Plain text';
 *
 * });
 *
 * //If installed in a subfolder (don't forget to change your .htaccess)
 * $phiber->baseUri('subfolder');
 *
 */


$phiber->boot();
?>

