<?php
/**
 * 图片特效接口
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestPtu extends RequestBase
{
    /**
     * 图片滤镜（天天P图）
     *      https://ai.qq.com/doc/ptuimgfilter.shtml
     *      对原图进行滤镜特效处理，更适合人物图片
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'filter' => '滤镜特效编码，定义见接口',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed
     */
    public function imgFilter(array $params)
    {
        $apiUri = '/face/ptu_imgfilter';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 图片滤镜（AI Lab）
     *      https://ai.qq.com/doc/ptuimgfilter.shtml
     *      对原图进行滤镜特效处理，更适合风景图片
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'filter' => '滤镜特效编码，定义见接口',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed
     */
    public function visionImgFilter(array $params)
    {
        $apiUri = '/ptu/vision_imgfilter';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 人脸美妆
     *      https://ai.qq.com/doc/facecosmetic.shtml
     *      给定图片和美妆编码，对原图进行人脸美妆特效处理
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'cosmetic' => '美妆编码，定义见下文描述',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed
     */
    public function faceCosmetic(array $params)
    {
        $apiUri = '/ptu/ptu_facecosmetic';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 人脸变妆
     *      https://ai.qq.com/doc/facedecoration.shtml
     *      给定图片和变妆编码，对原图进行人脸变妆特效处理
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'decoration' => '变妆编码，定义见下文描述',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed
     */
    public function faceCoration(array $params)
    {
        $apiUri = '/ptu/ptu_facedecoration';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 大头贴
     *      https://ai.qq.com/doc/facesticker.shtml
     *      给定图片和大头贴编码，对原图进行大头贴特效处理
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'sticker' => '大头贴编码，定义见下文描述',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed
     */
    public function faceSticker(array $params)
    {
        $apiUri = '/ptu/ptu_facesticker';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 颜龄检测
     *      https://ai.qq.com/doc/faceage.shtml
     *        给定图片，对原图进行人脸颜龄检测处理
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed
     */
    public function faceAge(array $params)
    {
        $apiUri = '/ptu/ptu_faceage';
        return $this->baseAPi($apiUri, $params);
    }
}