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
		$son_ziyaret = Yii::$app->db->createCommand('SELECT Giris_Zamani FROM ziyaret WHERE IP = "192.168.83.1" ORDER BY ID DESC LIMIT 1,1')->queryAll();
		$gunluk_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE DATE(`Giris_Zamani`) = CURDATE() ')->queryAll();
		$dun_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE DATE(`Giris_Zamani`) = CURDATE()-1 ')->queryAll();
		$haftalik_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE yearweek(DATE(`Giris_Zamani`)) = yearweek(CURDATE()) ')->queryAll();
		$aylik_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE DATE(`Giris_Zamani`) >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH) ')->queryAll();
		$yillik_ziyaret = Yii::$app->db->createCommand('SELECT * FROM ziyaret WHERE DATE(`Giris_Zamani`) >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR) ')->queryAll();
        return $this->render('_index',['ziyaret' => $ziyaret,'model' => $model,'ip_ziyaret' => $ip_ziyaret,'gunluk_ziyaret' => $gunluk_ziyaret,'dun_ziyaret' => $dun_ziyaret,'haftalik_ziyaret' => $haftalik_ziyaret,'aylik_ziyaret' => $aylik_ziyaret,'yillik_ziyaret' => $yillik_ziyaret,'son_ziyaret' => $son_ziyaret]);
    
    }
}
