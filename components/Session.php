<?php

namespace maximkozhin\alert\components;

class Session extends \yii\web\Session
{
    public $flashIndex = 'flash';

    public function addFlash($key, $value = true, $removeAfterAccess = true)
    {
        parent::addFlash('flash', ['type' => $key, 'value'=>$value], $removeAfterAccess);
    }

    public function setFlash($key, $value = true, $removeAfterAccess = true)
    {
        parent::addFlash('flash', ['type' => $key, 'value' => $value], $removeAfterAccess);
    }
}
