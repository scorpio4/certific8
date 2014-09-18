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

