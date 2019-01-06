<?php	
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\bootstrap\ActiveForm;
use kouosl\ziyaretci\models\Ziyaret;


$this->title = 'Ziyaretci Sayaci';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;

$visitor_ip = $_SERVER['REMOTE_ADDR'];

$this->registerJs( <<< EOT_JS_CODE

var browser = '';
var browserVersion = 0;

if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Opera';
} else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
    browser = 'MSIE';
} else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Netscape';
} else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Chrome';
} else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Safari';
    /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
    browserVersion = new Number(RegExp.$1);
} else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Firefox';
}
if(browserVersion === 0){
    browserVersion = parseFloat(new Number(RegExp.$1));
}
var myvar = (browser + " - " + browserVersion);
$("#browser").text("Tarayıcı - Sürüm : " + myvar);
EOT_JS_CODE
);



$uagent = $_SERVER['HTTP_USER_AGENT'] . "<br/>";
function os_info($uagent)
{
    // the order of this array is important
    global $uagent;
    $oses   = array(
        'Win311' => 'Win16',
        'Win95' => '(Windows 95)|(Win95)|(Windows_95)',
        'WinME' => '(Windows 98)|(Win 9x 4.90)|(Windows ME)',
        'Win98' => '(Windows 98)|(Win98)',
        'Win2000' => '(Windows NT 5.0)|(Windows 2000)',
        'WinXP' => '(Windows NT 5.1)|(Windows XP)',
        'WinServer2003' => '(Windows NT 5.2)',
        'WinVista' => '(Windows NT 6.0)',
        'Windows 7' => '(Windows NT 6.1)',
        'Windows 8' => '(Windows NT 6.2)',
        'Windows 8.1' => '(Windows NT 6.3)',
        'Windows 10' => '(Windows NT 10.0)',
        'WinNT' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'OpenBSD' => 'OpenBSD',
        'SunOS' => 'SunOS',
        'Ubuntu' => 'Ubuntu',
        'Android' => 'Android',
        'Linux' => '(Linux)|(X11)',
        'iPhone' => 'iPhone',
        'iPad' => 'iPad',
        'MacOS' => '(Mac_PowerPC)|(Macintosh)',
        'QNX' => 'QNX',
        'BeOS' => 'BeOS',
        'OS2' => 'OS/2',
        'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
    );
    $uagent = strtolower($uagent ? $uagent : $_SERVER['HTTP_USER_AGENT']);
    foreach ($oses as $os => $pattern)
        if (preg_match('/' . $pattern . '/i', $uagent))
            return $os;
    return 'Unknown';
}

$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);

?>

<div class="row">
        <div class="col-lg-9">
            <?php $i=0; foreach($ziyaret as $value){ ?>
             <?php $i++; } ?>
        </div>
</div>

<div class="row">
        <div class="col-lg-9">
            <?php $y=0; foreach($ip_ziyaret as $value){ ?>
             <?php $y++; } ?>
        </div>
</div>

<div class="row">
        <div class="col-lg-9">
            <?php $z=0; foreach($gunluk_ziyaret as $value){ ?>
             <?php $z++; } ?>
        </div>
</div>

<div class="row">
        <div class="col-lg-9">
            <?php $a=0; foreach($dun_ziyaret as $value){ ?>
             <?php $a++; } ?>
        </div>
</div>

<div class="row">
        <div class="col-lg-9">
            <?php $t=0; foreach($haftalik_ziyaret as $value){ ?>
             <?php $t++; } ?>
        </div>
</div>

<div class="row">
        <div class="col-lg-9">
            <?php $y=0; foreach($aylik_ziyaret as $value){ ?>
             <?php $y++; } ?>
        </div>
</div>

<div class="row">
        <div class="col-lg-9">
            <?php $u=0; foreach($yillik_ziyaret as $value){ ?>
             <?php $u++; } ?>
        </div>
</div>


<!DOCTYPE html>
<html>
	<head>
		<title> </title>
		<style type="text/css">
			.wrapper{
					height: 310px;
					width: 700px;
					background-color: skyblue;
					margin:auto;
					text-align:center;
					border: 1px solid white;
					box-shadow: 2px 2px 10px gray;
			}
			h1{
					background-color: mediumseagreen;
					color:white;
					border-bottom: 2px solid white;
					padding:20px;
					margin:0px;
			}
			.left{
					float:left;
					width:58%;
					text-align:left;
			}
			.right{
					float:right;
					width:42%;
					text-align: left;
			}

		</style>
	</head>	
	
	<body>   
		<div class="wrapper">
			<h1>
				Ziyaretci Sayaci
			</h1>

			<div class="left">
			<h4>Toplam Ziyaretci Sayisi : <?php echo $i ?></h4>
			<h4>Günlük Ziyaretci Sayisi : <?php echo $z ?></h4>
			<h4>Bir Önceki Gün Ziyaretci Sayisi : <?php echo $a ?></h4>
			<h4>Haftalık Ziyaretci Sayisi : <?php echo $t ?></h4>
			<h4>Aylık Ziyaretci Sayisi : <?php echo $y ?></h4>
			<h4>Yıllık Ziyaretci Sayisi : <?php echo $u ?></h4>
			</div>
			
			<div class="right">
			<h4>Siteyi Ziyaret Sayiniz : <?php echo $y ?></h4>
			<h4>IP Adresiniz : <?php echo $visitor_ip ?> </h4>
			<h4 id="browser"></h4>
			<h4>İsletim Sisteminiz : <?php echo os_info($uagent);?></h4>
			<h4>En Son Ziyaret Ettiğiniz Tarih : <div class="row">
													<div class="col-lg-9">
														<?php $p=0; foreach($son_ziyaret as $value){ ?>
															<div id="<?php echo $p; ?>"><?php echo $value["Giris_Zamani"]; ?></div>
															<?php $p++; } ?>
													</div>
												</div>
			</h4>
			<h4>Dil : <?php echo strtoupper($http_lang)?></h4>
			</div>
			
			
		</div>	
	</body>
</html>	
	






