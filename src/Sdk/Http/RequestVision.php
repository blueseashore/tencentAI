<?php
/**
 * 看图识别接口
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestVision extends RequestBase
{
    /**
     * 看图说话
     *      https://api.ai.qq.com/fcgi-bin/vision/vision_imgtotext
     *      用一句话描述图片
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'session_id' => '一次请求ID',
     * ]
     * @return mixed|string
     */
    public function imgToText(array $params)
    {
        $apiUri = '/vision/vision_imgtotext';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 多标签识别
     *      https://ai.qq.com/doc/imagetag.shtml
     *      识别一个图像的标签信息,对图像分类
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function imageTag(array $params)
    {
        $apiUri = '/image/image_tag';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 模糊图片检测
     *      https://ai.qq.com/doc/imagefuzzy.shtml
     *      判断一个图像的模糊程度
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function imageFuzzy(array $params)
    {
        $apiUri = '/image/image_fuzzy';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 美食图片识别
     *      https://ai.qq.com/doc/imagefood.shtml
     *      识别一个图像是否为美食图像
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function imageFood(array $params)
    {
        $apiUri = '/image/image_food';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 场景识别
     *      https://ai.qq.com/doc/vision_scene.shtml
     *      对图片进行场景识别，快速找出图片中包含的场景信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '图片格式，定义见下文描述',
     *      'topk' => '返回结果个数（已按置信度倒排）',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function scener(array $params)
    {
        $apiUri = '/vision/vision_scener';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 物体识别
     *      https://ai.qq.com/doc/vision_object.shtml
     *      对图片进行物体识别，快速找出图片中包含的物体信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '图片格式，定义见下文描述',
     *      'topk' => '返回结果个数（已按置信度倒排）',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function objectR(array $params)
    {
        $apiUri = '/vision/vision_objectr';
        return $this->baseAPi($apiUri, $params);
    }
}