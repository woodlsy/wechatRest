<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\cgiBin\message;

use woodlsy\wechatRest\Request;

/**
 * 公众号发送模板消息
 *
 * @author yls
 * @package woodlsy\wechatRest\cgiBin\message
 */
class TemplateSend extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/message/template/send';
    }

    /**
     * 设置access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : TemplateSend
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置接收者OpenId
     * 必填
     *
     * @author yls
     * @param string $openId
     * @return $this
     */
    public function setOpenId(string $openId) : TemplateSend
    {
        $this->params['touser'] = $openId;
        return $this;
    }

    /**
     * 设置模板ID
     * 必填
     *
     * @author yls
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId(string $templateId) : TemplateSend
    {
        $this->params['template_id'] = $templateId;
        return $this;
    }

    /**
     * 模板跳转链接
     * 非必填
     *
     * @author yls
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url) : TemplateSend
    {
        $this->params['url'] = $url;
        return $this;
    }

    /**
     * 跳小程序所需数据，不需跳小程序可不用传该数据
     * 非必填
     *
     * @author yls
     * @param string $miniprogramAppId 所需跳转到的小程序appid（该小程序appid必须与发模板消息的公众号是绑定关联关系，暂不支持小游戏）
     * @param string $pagePath 所需跳转到小程序的具体页面路径，支持带参数,（示例index?foo=bar），要求该小程序已发布，暂不支持小游戏
     * @return $this
     */
    public function setMiniprogram(string $miniprogramAppId, string $pagePath) : TemplateSend
    {
        $this->params['miniprogram'] = [
            'appid'    => $miniprogramAppId,
            'pagepath' => $pagePath
        ];
        return $this;
    }

    /**
     * 防重入id。对于同一个openid + client_msg_id, 只发送一条消息,10分钟有效,超过10分钟不保证效果。若无防重入需求，可不填
     * 非必填
     *
     * @author yls
     * @param string $clientMsgId
     * @return $this
     */
    public function setClientMsgId(string $clientMsgId) : TemplateSend
    {
        $this->params['client_msg_id'] = $clientMsgId;
        return $this;
    }

    /**
     * 模板数据
     * 必填
     *
     * @author yls
     * @param array $data
     * @return $this
     */
    public function setData(array $data) : TemplateSend
    {
        $this->params['data'] = $data;
        return $this;
    }
}