<?php

namespace timvermaercke\cookiethough;

use timvermaercke\cookiethough\models\Settings;
use Craft;
use craft\base\Plugin;
use timvermaercke\cookiethough\assetbundles\cookiethough\CookieThoughAsset;

class CookieThough extends Plugin
{
  public static $plugin;
  public $schemaVersion = "1.0.1";
  public $hasCpSettings = true;
  public $hasCpSection = false;

  public function init()
  {
    parent::init();
    self::$plugin = $this;

    $this->view->registerAssetBundle(CookieThoughAsset::class);
  }

  protected function createSettingsModel()
  {
    return new Settings();
  }

  protected function settingsHtml(): string
  {
    return Craft::$app->view->renderTemplate(
      "cookie-though/settings",
      [
        "settings" => $this->getSettings()
      ]
    );
  }
}
