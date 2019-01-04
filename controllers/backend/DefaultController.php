<?php
namespace kouosl\ziyaretci\controllers\backend;
use kouosl\ziyaretci\models\Ziyaret;
use Yii;

class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    public function actionIndex()
    {
        $model = new Ziyaret();
		
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Giris Eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        } else {
            return $this->render('_index', [
                'model' => $model,
   
            ]);
        }
    }
	
}
