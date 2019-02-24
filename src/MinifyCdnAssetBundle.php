<?php

namespace poo\fontawesome4;

use yii\web\AssetBundle as BaseAssetBundle;

/**
 * FontAwesome AssetBundle
 */
class MinifyCdnAssetBundle extends BaseAssetBundle
{
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
    ];
}
