<?php

namespace maximkozhin\alert\assets;

use yii\web\AssetBundle;

/**
 * Class AlertBundle
 * @package maximkozhin\alert\assets
 * @author Maxim Kozhin
 */
class AlertBundle extends AssetBundle
{
    /** @var string Папка хранения ресурсов */
    public $sourcePath = '@maximkozhin/alert/dist';

    /** @var array CSS-ресурсы */
    public $css = [
        'css/alert.css',
    ];
}
