<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\component;

use woodlsy\wechatRest\Request;

class ApiAuthorizerToken extends Request
{

    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/component/api_authorizer_token';
    }

    /**
     * 设置第三方appid
     *
     * @author yls
     * @param string $appId
     * @return $this
     */
    public function setComponentAppId(string $appId) : ApiAuthorizerToken
    {
        $this->params['component_appid'] = $appId;
        return $this;
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setComponentAccessToken(string $accessToken) : ApiAuthorizerToken
    {
        $this->queryParams['component_access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置刷新令牌
     *
     * @author yls
     * @param string $refreshToken
     * @return $this
     */
    public function setRefreshToken(string $refreshToken) : ApiAuthorizerToken
    {
        $this->params['authorizer_refresh_token'] = $refreshToken;
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
        $this->params['authorizer_appid']     = $this->appId;
        $this->params = json_encode($this->params);
        return $this;
    }
}