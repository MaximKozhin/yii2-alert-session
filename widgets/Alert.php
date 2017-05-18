<?php

namespace maximkozhin\alert\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\View;

class Alert extends Widget
{
    public $alertTypes = [
        'error'   => 'alert-danger',
        'danger'  => 'alert-danger',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning',
        'default' => 'alert-default',
    ];

    const CSS_CLASS     = 'alert';

    public $options = [
        'onclick' => "$(this).slideUp()",
    ];

    public function run()
    {
        Yii::$app->view->registerAssetBundle('maximkozhin\alert\assets\AlertBundle');

        $session = Yii::$app->session;

        if($flashes = $session->get(Yii::$app->session->flashIndex)) {

            foreach ($flashes as $index => $message) {

                if(key_exists($message['type'], $this->alertTypes)) {
                    $this->options['class'] = self::CSS_CLASS.' '.$this->alertTypes[$message['type']];
                } else {
                    $this->options['class'] = self::CSS_CLASS.' '.$this->alertTypes['default'];
                }

                echo Html::tag('div', $message['value'], $this->options);
            }

            $session->removeFlash(Yii::$app->session->flashIndex);
        }
    }
}
