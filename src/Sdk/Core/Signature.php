<?php
/**
 * 签名类
 *
 * User: kendo    Date: 2018/11/20
 */

namespace TencentAi\Core;

class Signature
{
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
     * 获取签名实例
     *
     * @return Signature
     */
    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * 计算签名
     *
     * @param array $params
     * @param string $appKey
     * @return string
     */
    public function getReqSign(array &$params, $appKey = '')
    {
        //数组按key进行升序排序
        ksort($params);

        $signStr = '';

        foreach ($params as $key => $value) {
            $signStr .= $key . '=' . urlencode($value) . '&';
        }

        $signStr .= 'app_key=' . $appKey;

        return strtoupper(md5($signStr));
    }
}
