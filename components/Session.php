<?php

namespace maximkozhin\alert\components;

/**
 * Class Session
 * @package maximkozhin\alert\components
 * @author Maxim Kozhin
 */
class Session extends \yii\web\Session
{
    /**
     * @var string
     */
    public $flashIndex = 'flash';

    /**
     * @param string $key
     * @param bool $value
     * @param bool $removeAfterAccess
     */
    public function addFlash($key, $value = true, $removeAfterAccess = true)
    {
        parent::addFlash('flash', ['type' => $key, 'value'=>$value], $removeAfterAccess);
    }

    /**
     * @param string $key
     * @param bool $value
     * @param bool $removeAfterAccess
     */
    public function setFlash($key, $value = true, $removeAfterAccess = true)
    {
        parent::addFlash('flash', ['type' => $key, 'value' => $value], $removeAfterAccess);
    }
}
