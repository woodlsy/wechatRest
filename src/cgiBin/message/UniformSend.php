<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\cgiBin\message;

use woodlsy\wechatRest\Request;

/**
 * 下发小程序和公众号统一的服务消息
 *
 * @author yls
 * @package woodlsy\wechatRest\cgiBin\message
 */
class UniformSend extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/message/wxopen/template/uniform_send';
    }

    /**
     * 设置access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : UniformSend
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置OpenId
     *
     * @author yls
     * @param string $openId
     * @return $this
     */
    public function setOpenId(string $openId) : UniformSend
    {
        $this->params['touser'] = $openId;
        return $this;
    }

    /**
     * 设置小程序模板消息，优先
     * 格式：[
     *      'template_id' => '', // 小程序模板ID
     *      'page' => '', // 小程序页面路径
     *      'form_id' => '', // 小程序模板消息formid
     *      'data' => [
     *              'keyword1' => [
     *                  'value' => '339208499'
     *              ]
     *          ], // 	小程序模板数据
     *      'emphasis_keyword' => 'keyword1.DATA', // 小程序模板放大关键词
     * ]
     *
     * @author yls
     * @param array $appTemplateMsg
     * @return $this
     */
    public function setappTemplateMsg(array $appTemplateMsg): UniformSend
    {
        $this->params['weapp_template_msg'] = $appTemplateMsg;
        return $this;
    }

    /**
     * 设置公众号模板消息
     * 格式：[
     *      'appid' => '', // 公众号appid，要求与小程序有绑定且同主体
     *      'template_id' => '', // 公众号模板id
     *      'url' => '', // 公众号模板消息所要跳转的url
     *      'miniprogram' => [
     *              'appid' => 'xiaochengxuappid12345',
     *              'pagepath' => 'index?foo=bar'
     *           ], // 公众号模板消息所要跳转的小程序，小程序的必须与公众号具有绑定关系
     *      'data' => '', // 公众号模板消息的数据
     * ]
     *
     * @author yls
     * @param array $mpTemplateMsg
     * @return $this
     */
    public function setMpTemplateMsg(array $mpTemplateMsg): UniformSend
    {
        $this->params['mp_template_msg'] = $mpTemplateMsg;
        return $this;
    }

}