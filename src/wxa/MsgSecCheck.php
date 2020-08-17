<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class MsgSecCheck extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/msg_sec_check';
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : MsgSecCheck
    {
        $this->queryParams['access_token'] = $accessToken;
        $this->params['access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置内容
     *
     * @author yls
     * @param string $content
     * @return $this
     */
    public function setContent(string $content) : MsgSecCheck
    {
        $this->params['content'] = $content;
        return $this;
    }

    /**
     * 获取参数
     *
     * @author yls
     * @return $this
     */
    public function getParams() : MsgSecCheck
    {
        $this->params = json_encode($this->params);
        return $this;
    }

}