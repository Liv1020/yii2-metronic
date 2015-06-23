<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  dlds\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class SpinnerAsset extends AssetBundle
{
    public $sourcePath = '@dlds/metronic/assets';
    public $js = [
        'global/plugins/fuelux/js/spinner.min.js',
    ];

    public $depends = [
        'dlds\metronic\bundles\CoreAsset',
    ];
}
