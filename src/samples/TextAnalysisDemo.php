<?php
/**
 * 基础文本分析接口DEMO
 *
 * User: kendo    Date: 2018/11/21
 */
require_once __DIR__ . '/../../vendor/autoload.php';

//请在此填入AppID与AppKey
$appId = '';
$appKey = '';

$analysis = new \TencentAi\Http\RequestTextAnalysis($appId, $appKey);

/*
//分词
$response = $analysis->wordSeg([
    'text' => iconv("UTF-8", "GBK", '好好学习，天天向上'),
]);
print_r(iconv("GB2312", "UTF-8", $response));
*/

/*
//词性
$response = $analysis->wordPos([
    'text' => iconv("UTF-8", "GBK", '好好学习天天向上'),
]);
print_r(iconv("GB2312", "UTF-8", $response));
*/

/*
//专有名词
$response = $analysis->wordNer([
    'text' => iconv("UTF-8", "GBK", '亚瑟是个大保健'),
]);
print_r(iconv("GB2312", "UTF-8", $response));
*/

/*
//同义词
$response = $analysis->wordSyn([
    'text' => iconv("UTF-8", "GBK", '好饿'),
]);
print_r(iconv("GB2312", "UTF-8", $response));
*/

/*
//意图分析
$response = $analysis->wordCom([
    'text' => '今天深圳的天气怎么样？明天呢',
]);
print_r($response);
*/

/*
//情感分析
$response = $analysis->textPolar([
    'text' => '喜欢你',
]);
print_r($response);
*/