<?php

namespace maximkozhin\alert\assets;

use yii\web\AssetBundle;

class AlertBundle extends AssetBundle
{
    public $sourcePath = '@maximkozhin/alert/dist';

    public $css = [
        'css/alert.css',
    ];
}