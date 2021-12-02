<?php

namespace humhub\modules\stepstone_announcements\assets;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@stepstone_announcements/resources';

    /**
     * @inheritdoc
     */
    public $publishOptions = [
        // TIPP: Change forceCopy to true when testing your js in order to rebuild
        // this assets on every request (otherwise they will be cached)
        'forceCopy' => false
    ];
    
    public $css = [
        'css/humhub.stepstone_announcements.css'
    ];
    
    /**
     * @inheritdoc
     */
//    public $js = [
//        'js/humhub.stepstone_announcements.js'
//    ];

}