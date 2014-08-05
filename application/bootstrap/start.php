<?php
namespace bootstrap;
use Phiber\wire;

class start extends \bootstrap
{
  /**
   * Pre-boot code here
   * Warning: This code runs before the error/log handler, setting the timezone and session start
   *
   * This code runs before booting the application and provides an access to the Phiber\wire object
   * Use it to register libraries that need to listen for the boot event for example
   * @param Phiber\wire Object of the main application.
   */
  public function __construct(wire $wire)
  {
    //$wire->addLib('event');
    //\Phiber\Event\eventfull::attach('event\listen','Phiber\phiber');
    //\Phiber\Event\eventfull::attach('event\listen','myevents.first');
    //\Phiber\Event\eventfull::attach(new \event\listen,'myevents.first');

  }
}
?>