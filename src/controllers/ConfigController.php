<?php

namespace timvermaercke\cookiethough\controllers;

use \timvermaercke\cookiethough\CookieThough;
use craft\web\Controller;

class ConfigController extends Controller
{
    protected array|bool|int $allowAnonymous = ["config"];

    public function actionConfig()
    {
        $settings = CookieThough::getInstance()->getSettings();

        $policies = [];
        if ($settings->policies) {
            foreach ($settings->policies as $k => $rawPolicy) {
                $policies[] = [
                    "id" => $rawPolicy[0],
                    "label" => $rawPolicy[1],
                    "category" => $rawPolicy[2],
                    "description" => $rawPolicy[3],
                ];
            }
        }

        $config = [
            "header" => [
                "title" => $settings->headerTitle,
                "subTitle" => $settings->headerSubTitle,
                "description" => $settings->headerDescription,
            ],

            "essentialLabel" => $settings->essentialLabel,

            "permissionLabels" => [
                "accept" => $settings->permissionLabelsAccept,
                "acceptAll" => $settings->permissionLabelsAcceptAll,
                "decline" => $settings->permissionLabelsDecline,
            ],

            "cookiePreferenceKey" => $settings->cookiePreferenceKey,

            "cookiePolicy" => [
                "url" => $settings->cookiePolicyUrl,
                "label" => $settings->cookiePolicyLabel,
            ],

            "customizeLabel" => $settings->customizeLabel,

            "policies" => $policies,
        ];

        return $this->asJson($config);
    }
}
