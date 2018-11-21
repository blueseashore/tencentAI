<?php
/**
 * 智能闲聊DEMO
 *
 * User: kendo    Date: 2018/11/21
 */

#请指定autoload文件所在
require_once __DIR__ . '/../../vendor/autoload.php';

//请在此填入AppID与AppKey
$appId = '';
$appKey = '';

$nlp = new \TencentAi\Http\RequestNlp($appId, $appKey);

//智能闲聊
$response = $nlp->textChat([
    'session' => 'test_1',
    'question' => 'Are you Ok ?'
]);
print_r($response);

