<?php

namespace denis909\yii;

use yii\helpers\Html;

class Html extends yii\helpers\Html
{

    public $submitButtonOptions = ['class' => 'btn btn-primary'];

    public static function submitButton($content = null, $options = [])
    {
        if (!$content)
        {
            $content = Yii::t('app', 'Submit');
        }

        $options = ArrayHelper::merge($this->submitButtonOptions, $options);

        return static::submitButton($content, $options);
    }

}