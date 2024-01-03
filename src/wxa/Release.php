<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class Release extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/release';
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : Release
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }


    /**
     * 获取参数
     *
     * @author yls
     * @return $this
     */
    public function getParams() : Request
    {
        $this->params = "{}";
        return $this;
    }

}