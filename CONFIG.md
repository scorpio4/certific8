######Edit protected/config/main.php    

```
'db'=>array(   
        'connectionString' => 'mysql:host={host};dbname={dbname}',   
        'emulatePrepare' => true,    
        'username' => '{dbusername}',    
        'password' => '{password}',    
        'charset' => 'utf8',   
        'tablePrefix' => 'c8_',   
),   
```


######Mustache 
```
---Do model operations here -----     
spl_autoload_unregister(array('YiiBase','autoload')); // Unregistering YiiBase auto loading for avoiding conflict with mustache.    
Yii::import('application.vendor.mustache.*');
require_once('src/Mustache/Autoloader.php');
Mustache_Autoloader::register();

$m = new Mustache_Engine();
echo $m->render('Hello, {{planet}}!', array('planet' => 'World')); // "Hello,

spl_autoload_register(array('YiiBase', 'autoload')); //Registering Yii auto loading.
```