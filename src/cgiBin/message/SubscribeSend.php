<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\cgiBin\message;

use woodlsy\wechatRest\Request;

class SubscribeSend extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/message/subscribe/send';
    }

    /**
     * 设置access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : SubscribeSend
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
    public function setOpenId(string $openId) : SubscribeSend
    {
        $this->params['touser'] = $openId;
        return $this;
    }

    /**
     * 设置模板ID
     *
     * @author yls
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId(string $templateId) : SubscribeSend
    {
        $this->params['template_id'] = $templateId;
        return $this;
    }

    /**
     * 设置小程序跳转地址，支持参数
     * index?foo=bar
     *
     * @author yls
     * @param string $page
     * @return $this
     */
    public function setPage(string $page) : SubscribeSend
    {
        $this->params['page'] = $page;
        return $this;
    }

    /**
     * 设置模板内容  [
     *  "key1" => [
     *      "value" => "1"
     *  ]
     * ]
     * { "key1": { "value": any }, "key2": { "value": any } }
     *
     * @author yls
     * @param array $data
     * @return $this
     */
    public function setData(array $data): SubscribeSend
    {
        $this->params['data'] = $data;
        return $this;
    }

    /**
     * 获取参数
     *
     * @author yls
     * @return $this
     */
    public function getParams() : SubscribeSend
    {
        $this->params = json_encode($this->params,JSON_UNESCAPED_UNICODE);
        return $this;
    }
}