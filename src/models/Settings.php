<?php

namespace timvermaercke\cookiethough\models;

use craft\base\Model;

class Settings extends Model
{
  public $headerTitle = "cookie though?";
  public $headerSubTitle = "You're probably fed up with these banners...";
  public $headerDescription = "Everybody wants to show his best side - and so do we. That’s why we use cookies to guarantee you a better experience.";
  public $essentialLabel = "Always on";
  public $permissionLabelsAccept = "Accept";
  public $permissionLabelsAcceptAll = "Accept all";
  public $permissionLabelsDecline = "Decline";
  public $cookiePreferenceKey = "cookie-preferences";
  public $cookiePolicyUrl = "https://inthepocket.com/cookie-policy";
  public $cookiePolicyLabel = "Read the full cookie declaration";
  public $customizeLabel = "Customize";
  public $policies = [
    [
      "essential",
      "Essential Cookies",
      "essential",
      "We need to save some technical cookies, for the website to function properly.",
    ],
    [
      "functional",
      "Functional Cookies",
      "functional",
      "We need to save some basic preferences eg. language.",
    ],
    [
      "statistics",
      "Statistics",
      "statistics",
      "We need to save some technical cookies, for the website to function properly.",
    ],
    [
      "social",
      "Social Media Cookies",
      "social",
      "We need to save some social cookies, for the website to function properly.",
    ],
  ];

  public function rules()
  {
    return [
      ["headerTitle", "string"],
      ["headerSubTitle", "string"],
      ["headerDescription", "string"],
      ["headerDescription", "required"],

      ["essentialLabel", "string"],

      ["permissionLabelsAccept", "string"],
      ["permissionLabelsAccept", "required"],
      ["permissionLabelsAcceptAll", "string"],
      ["permissionLabelsAcceptAll", "required"],
      ["permissionLabelsDecline", "string"],
      ["permissionLabelsDecline", "required"],

      ["cookiePreferenceKey", "string"],
      ["cookiePolicyUrl", "string"],
      ["cookiePolicyLabel", "string"],

      ["customizeLabel", "string"],
      ["customizeLabel", "required"],

      ["policies", "required"],
    ];
  }
}
