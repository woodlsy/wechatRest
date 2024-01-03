<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\component;

use woodlsy\wechatRest\Request;

class ApiQueryAuth extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/component/api_query_auth';
    }

    /**
     * 设置票据
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : ApiQueryAuth
    {
        $this->queryUrl = $this->queryUrl . '?component_access_token=' . $accessToken;
        return $this;
    }

    /**
     * 设置授权码
     *
     * @author yls
     * @param string $authCode
     * @return $this
     */
    public function setAuthCode(string $authCode):ApiQueryAuth
    {
        $this->params['authorization_code'] = $authCode;
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
        $this->params['component_appid'] = $this->appId;
        $this->params                    = json_encode($this->params);
        return $this;
    }
}