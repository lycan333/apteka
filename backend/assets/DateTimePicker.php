<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DateTimePicker extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/js/daterangepicker/daterangepicker-bs3.css'
    ];
    public $js = [
        'assets/js/bootstrap-datepicker.js',
        'assets/js/bootstrap-timepicker.min.js',
        'assets/js/daterangepicker/moment.min.js',
        'assets/js/daterangepicker/daterangepicker.js',
    ];
}
