<?php
/**
 * 智能闲聊接口 & 机器翻译
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestNlp extends RequestBase
{
    /**
     * 基础闲聊
     *      https://ai.qq.com/doc/nlpchat.shtml
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'session' => '会话标识（应用内唯一）',
     *      'question' => '用户输入的聊天内容',
     * ]
     * @return mixed|string
     */
    public function textChat(array $params)
    {
        $apiUri = '/nlp/nlp_textchat';
        return $this->baseAPi($apiUri, $params);
    }
}