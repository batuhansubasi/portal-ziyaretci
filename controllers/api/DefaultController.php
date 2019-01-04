<?php
namespace kouosl\ziyaretci\controllers\api;

class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
