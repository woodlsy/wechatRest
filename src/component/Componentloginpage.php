<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\component;

use woodlsy\wechatRest\Request;

class Componentloginpage extends Request
{
    public $queryParams = [];

    public function __construct()
    {
        $this->queryUrl = 'https://mp.weixin.qq.com/cgi-bin/componentloginpage';
    }

    /**
     * 设置预授权码
     *
     * @author yls
     * @param string $preAuthCode
     * @return $this
     */
    public function setPreAuthCode(string $preAuthCode) : Componentloginpage
    {
        $this->queryParams['pre_auth_code'] = $preAuthCode;
        return $this;
    }

    /**
     * 设置回调地址
     *
     * @author yls
     * @param string $redirectUri
     * @return $this
     */
    public function setRedirectUri(string $redirectUri) : Componentloginpage
    {
        $this->queryParams['redirect_uri'] = $redirectUri;
        return $this;
    }

    /**
     * 获取url
     *
     * @author yls
     * @return string
     */
    public function getUrl() : string
    {
        $this->queryParams['auth_type']       = 2;
        $this->queryParams['component_appid'] = $this->appId;
        return $this->queryUrl . '?' . http_build_query($this->queryParams);
    }
}