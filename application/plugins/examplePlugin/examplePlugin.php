<?php

class examplePlugin extends Phiber\plugin
{
  public function run()
  {
    //we can assign view variables within our plugins
    $this->view->var = __class__;
  }
}
