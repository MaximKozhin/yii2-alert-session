<?php

namespace maximkozhin\alert\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\View;

/**
 * Class Alert
 * @package maximkozhin\alert\widgets
 * @author Maxim Kozhin
 */
class Alert extends Widget
{
    /**
     * пределяем классы по типу сообщения
     *
     * @var array
     */
    public $alertTypes = [
        'error'   => 'alert-danger',
        'danger'  => 'alert-danger',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning',
        'default' => 'alert-default',
    ];

    const CSS_CLASS = 'alert';

    /**
     * Опции, формируемые в аттрибутах HTML тэга сообщения
     *
     * @var array
     */
    public $options = [
        'onclick' => "$(this).slideUp()",
    ];

    /**
     * Метод регистрации ассета, перебора текущих сообщений в сессии и вывода их на экран
     * @return void
     */
    public function run()
    {
        /** Регистрируем медиа-ресурсы */
        Yii::$app->view->registerAssetBundle('\maximkozhin\alert\assets\AlertBundle');

        /** @var array $flashes Получаем список текущих сообщений*/
        if($flashes = Yii::$app->session->get(Yii::$app->session->flashIndex)) {

            /** Перебираем их по ключу (типу) и тексту сообщения */
            foreach ($flashes as $index => $message) {

                /** Создаем класс тэга */
                if(key_exists($message['type'], $this->alertTypes)) {
                    $this->options['class'] = self::CSS_CLASS.' '.$this->alertTypes[$message['type']];
                } else {
                    $this->options['class'] = self::CSS_CLASS.' '.$this->alertTypes['default'];
                }

                /** Выводим сообщение в указанном тэге */
                echo Html::tag('div', $message['value'], $this->options);
            }

            /** И удаляем сообщение, которое только что вывели */
            Yii::$app->session->removeFlash(Yii::$app->session->flashIndex);
        }
    }
}
