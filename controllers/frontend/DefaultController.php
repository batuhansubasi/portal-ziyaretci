<?php
namespace kouosl\ziyaretci\controllers\frontend;
use kouosl\ziyaretci\models\Ziyaret;
use Yii;		

class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    public function actionIndex()
    {	
		$model = new Ziyaret();
		$visitor_ip = $_SERVER['REMOTE_ADDR'];
		$model->IP = $visitor_ip;
		$model->Giris_Zamani = NULL;
		$model->save();
		
			
        $ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret')->queryAll();
		$ip_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE IP = "192.168.83.1" ')->queryAll();
		$gunluk_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE DATE(`Giris_Zamani`) = CURDATE() ')->queryAll();
		$dun_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE DATE(`Giris_Zamani`) = CURDATE()-1 ')->queryAll();
        return $this->render('_index',['ziyaret' => $ziyaret,'model' => $model,'ip_ziyaret' => $ip_ziyaret,'gunluk_ziyaret' => $gunluk_ziyaret,'dun_ziyaret' => $dun_ziyaret ]);
    
    }
}
