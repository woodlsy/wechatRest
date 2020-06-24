<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class GetCategory extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/get_category';
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setComponentAccessToken(string $accessToken) : GetCategory
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }

}