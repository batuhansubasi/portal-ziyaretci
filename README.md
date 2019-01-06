## portal-ziyaretci
**Ziyaretci Sayaci Modülü**

## Kurulum
Portal Ziyaretci modülünü, portal web uygulamasına eklemek için /portal dizininde bulunan composer.json dosyasına gidilerek, aşağıdaki kod parçaları repositories ve require kısımlarına eklenir. Portal dizininde composer update işlemi yapılarak modül yüklenir.

    ....
    "repositories": [
        {
            ....
            {
                "type": "vcs",
                "url": "https://github.com/batuhansubasi/portal-ziyaretci.git"
            }
    ],
    "require": {
         
        ....   
        "kouosl/portal-ziyaretci": "dev-master"
    },
    ....

Modülün yüklenmesinin ardından kullanıcı ve yönetici panellerinin çalışması için gerekli olan "ziyaret" isimli veritabanı tablosu, modülün migrations klasörü içerisinde bulunmaktadır. Migrate işlemi için altta bulunan kod parçasının portal dizininde çalıştırılması gerekmektedir.

    php yii migrate --migrationPath=@vendor/kouosl/portal-ziyaretci/migrations --interactive=0

## Panel Görünümleri

 - Kullanıcı Paneli => [http://portal.kouosl.ziyaretci](http://portal.kouosl/ziyaretci)
 ![1](https://user-images.githubusercontent.com/30631029/50739560-54dcea80-11f3-11e9-98b1-10a1b70e065e.png)
 
 - Admin Paneli => [http://portal.kouosl/admin/ziyaretci](http://portal.kouosl/admin/ziyaretci)
 ![2](https://user-images.githubusercontent.com/30631029/50739616-2dd2e880-11f4-11e9-8b1a-6095ea2de095.png)
![3](https://user-images.githubusercontent.com/30631029/50739647-6d013980-11f4-11e9-8494-83e9063c1e39.png)
## Notlar
 - Kullanıcı paneli açıldığında direk olarak tabloya kayıt yazar.
 - Yönetici panelinde kullanıcı ziyaret bilgileri  görüntülenebilir; güncelleme, silme ve ekleme işlemleri yapılabilir.
 - Modül içi dil dönüşümleri için Module.php ve index.php dosyaları ayarlanmıştır. Modülün içine bir örnek konmuştur. Kullanıcı Panelindeki pencerenin ilk başlığı, ingilizce karşılığıyla bastırılmıştır.

    				\Yii::$app->language = 'en-EN'; 
				echo Module::t('Ziyaretci Sayaci','Visitor Count');


