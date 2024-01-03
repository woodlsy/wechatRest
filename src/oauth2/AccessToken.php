<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\oauth2;

use woodlsy\wechatRest\Request;

class AccessToken extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/sns/oauth2/access_token';
    }

    /**
     * 获取access_token
     *
     * @author yls
     * @param string $code
     * @return $this
     */
    public function setCode(string $code) : AccessToken
    {
        $this->queryParams['code'] = $code;
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
        $this->queryParams['appid']      = $this->appId;
        $this->queryParams['secret']     = $this->appSecret;
        $this->queryParams['grant_type'] = 'authorization_code';
        return $this;
    }

}