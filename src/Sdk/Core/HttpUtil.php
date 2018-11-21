<?php
/**
 * HTTP 请求类
 *
 * User: kendo    Date: 2018/11/20
 */

namespace TencentAi\Core;

class HttpUtil
{
    private $_httpCode;

    private static $_instance;

    /**
     * 禁止外部实例化
     */
    private function __construct()
    {
    }

    /**
     * 防止实例被克隆
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化（这将创建它的副本）
     */
    private function __wakeup()
    {
    }

    /**
     * 获取类的实例
     *
     * @return HttpUtil
     */
    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * 发送HTTP POST 请求
     *
     * @param string $url
     * @param array $params
     * @return mixed|string
     */
    public function doHttpPost(string $url, array $params)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        // 1. 设置HTTP URL (API地址)
        curl_setopt($ch, CURLOPT_URL, $url);

        // 2. 设置HTTP HEADER (表单POST)
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded'
        ]);

        // 3. 设置HTTP BODY (URL键值对)
        $body = http_build_query($params);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        // 4. 调用API，获取响应结果
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_NOBODY, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);

        // 5.获取HTTP CODE
        $this->_httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($this->_httpCode != 200) {
            $msg = curl_error($ch);
            $response = json_encode([
                'ret' => -1,
                'msg' => "sdk http post err: {$msg}",
                'http_code' => $this->_httpCode
            ]);
        }

        curl_close($ch);

        return $response;
    }
}