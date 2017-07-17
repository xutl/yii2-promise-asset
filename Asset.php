<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\promise;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@xutl/yii2-promise-asset/assets';

    /**
     * @inherit
     */
    public $js = [
        'promise.min.js',
    ];
}