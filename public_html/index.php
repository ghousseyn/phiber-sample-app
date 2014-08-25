<?php

require "../vendor/phiber/phiber/library/wire.php";

$phiber = new Phiber\wire('../application/config.php');
/**
 *
 * $phiber->addroute('/text',function($phiber){
 *
 *    echo 'Plain text';
 *
 * });
 *
 */

$phiber->boot();
?>

