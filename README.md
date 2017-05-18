Alert Extension for Yii2 
========================

Manual Installation
-------------------

Copy files into 'your-repo' directory and add to your config file new alias

```
...
'aliases' => [
    '@maximkozhin' => '@app/your-repo/maximkozhin',
],
...
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




