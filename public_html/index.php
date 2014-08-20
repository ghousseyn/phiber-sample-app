<?php

require "../vendor/phiber/phiber/library/wire.php";

$phiber = new Phiber\wire;
/**
 *
 * $phiber->addroute('/text',function($phiber){
 *
 *    echo 'Plain text';
 *
 * });
 *
 */

$phiber->boot('../application/config.php');
?>

