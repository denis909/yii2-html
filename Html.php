<?php

namespace denis909\yii;

use yii\helpers\ArrayHelper;

class Html extends \yii\helpers\Html
{

    static $submitButtonOptions = ['class' => 'btn btn-primary'];
    
    static $cancelButtonOptions = ['class' => 'btn btn-secondary'];
    
    static $saveButtonOptions = ['class' => 'btn btn-success'];

    public static function submitButton($content = null, $options = [])
    {
        if (!$content)
        {
            $content = Yii::t('app', 'Submit');
        }

        $options = ArrayHelper::merge(static::$submitButtonOptions, $options);

        return parent::submitButton($content, $options);
    }
    
    public static function cancelButton($content = null, $options = [])
    {
        if (!$content)
        {
            $content = Yii::t('app', 'Cancel');
        }

        $options = ArrayHelper::merge(static::$cancelButtonOptions, $options);

        return parent::cancelButton($content, $options);
    }
    
    public static function saveButton($content = null, $options = [])
    {
        if (!$content)
        {
            $content = Yii::t('app', 'Save');
        }

        $options = ArrayHelper::merge(static::$saveButtonOptions, [
            'name' => 'action',
            'value' => 'save'
        ], $options);

        return parent::submitButton($content, $options);
    }

}