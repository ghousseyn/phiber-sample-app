<?php

class index extends \Phiber\controller
{
  public $testing;
  function actionMain()
  {

    $this->view->text = "Text from default controller: " . __file__;
  }

  function actionTest()
  {


  }

}

