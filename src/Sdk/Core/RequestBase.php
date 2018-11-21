<?php
/**
 * AI接口基类
 *      封装接口基础
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Core;

class RequestBase
{
    //应用标识（AppId）
    private $_appId;

    //应用密钥（AppKey）
    private $_appKey;

    /**
     * 设置appId和appKey
     *
     * RequestBase constructor.
     * @param string $appId
     * @param string $appKey
     */
    public function __construct($appId = '', $appKey = '')
    {
        $this->_appId = $appId;
        $this->_appKey = $appKey;
    }

    /**
     * 定义接口地址
     *
     * @var string
     */
    protected $_baseUri = 'https://api.ai.qq.com/fcgi-bin';

    /**
     * 获取APPID
     *
     * @return string
     */
    private function getAppId()
    {
        if (!empty($this->_appId)) {
            return $this->_appId;
        }
        return Config::APP_ID;
    }

    /**
     * 获取APPKEY
     *
     * @return string
     */
    private function getAppKey()
    {
        if (!empty($this->_appId)) {
            return $this->_appKey;
        }
        return Config::APP_KEY;
    }

    /**
     * 签名前进行参数补全
     *
     * @param array $params
     * @return array
     */
    protected function getReqSign(array $params)
    {
        //补全应用标识
        if (empty($params['app_id'])) {
            $params['app_id'] = $this->getAppId();
        }

        //补全随机字符串
        if (empty($params['nonce_str'])) {
            $params['nonce_str'] = uniqid($params['app_id']);
        }

        //补全请求时间
        if (empty($params['time_stamp'])) {
            $params['time_stamp'] = time();
        }

        //图片流编码验证
        if (isset($params['image']) && !$this->_isBase64($params['image'])) {
            $params['image'] = base64_encode($params['image']);
        }

        $params['sign'] = Signature::getInstance()->getReqSign($params, $this->getAppKey());

        return $params;
    }

    /**
     * 统一接口
     *
     * @param string $apiUri 相对接口请求地址
     * @param array $params 完整的参数
     * @return mixed|string
     */
    public function baseAPi($apiUri = '', array $params)
    {
        return HttpUtil::getInstance()->doHttpPost($this->_baseUri . $apiUri, $this->getReqSign($params));
    }

    public function _isBase64($str)
    {
        return $str == base64_encode(base64_decode($str)) ? true : false;
    }
}