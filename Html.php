<?php

namespace denis909\yii;

use yii\helpers\ArrayHelper;

class Html extends \yii\helpers\Html
{

    static $submitButtonOptions = ['class' => 'btn btn-primary'];

    public static function submitButton($content = null, $options = [])
    {
        if (!$content)
        {
            $content = Yii::t('app', 'Submit');
        }

        $options = ArrayHelper::merge(static::$submitButtonOptions, $options);

        return parent::submitButton($content, $options);
    }

}