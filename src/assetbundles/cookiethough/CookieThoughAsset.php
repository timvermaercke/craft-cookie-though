<?php

namespace timvermaercke\cookiethough\assetbundles\cookiethough;

use craft\web\AssetBundle;

class CookieThoughAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = "@timvermaercke/cookiethough/assetbundles/cookiethough/dist";

        $this->js = [
            "https://cookiethough.dev/lib/1.2.0",
            "js/CookieThough.js",
        ];

        parent::init();
    }
}
