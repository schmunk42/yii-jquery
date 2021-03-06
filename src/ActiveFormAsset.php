<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\jquery;

use yii\web\AssetBundle;

/**
 * The asset bundle for the [[ActiveForm]] widget.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 1.0
 */
class ActiveFormAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@yii/jquery/assets';
    /**
     * {@inheritdoc}
     */
    public $js = ['yii.activeForm.js'];
    /**
     * {@inheritdoc}
     */
    public $depends = [YiiAsset::class];
}
