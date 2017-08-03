Alert Extension for Yii2 
========================

Via composer
------------

add to your 'require' section in file 'composer.json'
```
 "require": {
       ...
        "maximkozhin/yii2-alert-session": "*"
    },
```
or run command

```
$ composer require maximkozhin/yii2-alert-session
```


**1. Configuration | Конфигурация**
-----------------------------------

insert into you config file
```
'components' => [
    ...
   'session' => [
       'class' => 'maximkozhin\alert\components\session',
       'flashIndex' => 'flash'
   ],
   ...
```

**2. Usage | Использование**
-----------------------------------

To create a Flash Message 
```
Yii::$app->session->addFlash($type, $message);
or
Yii::$app->session->setFlash($type, $message);
```
Your flash messages don't group by type, outputing by the FIFO principe


**2. Layout | Вывод**
-----------------------------------

add to your layout file 
```
...
    <?=\maximkozhin\alert\widgets\Alert::widget()?>
...
```
