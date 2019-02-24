<?php

namespace poo\fontawesome4;

use yii\web\AssetBundle as BaseAssetBundle;

/**
 * FontAwesome AssetBundle
 */
class MinifyAssetBundle extends BaseAssetBundle
{
    public $sourcePath = '@vendor/bower-asset/font-awesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
}
