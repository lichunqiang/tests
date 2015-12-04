<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => true,
    // 'suffix' => '.json',
    // 'ruleConfig' => ['class' => 'yii\rest\UrlRule'],
    'rules' => [
        ['class' => 'yii\rest\UrlRule', 'controller' => 'v1/user'],
        ['class' => 'yii\rest\UrlRule', 'controller' => 'v1/app']
    ],
];
