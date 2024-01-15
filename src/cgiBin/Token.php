<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\cgiBin;

use woodlsy\wechatRest\Request;

class Token extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/token';
        $this->queryParams['grant_type'] = 'client_credential';
    }

    /**
     * 获取参数
     *
     * @author yls
     * @return $this
     */
    public function getParams() : Request
    {
        $this->queryParams['appid'] = $this->appId;
        $this->queryParams['secret'] = $this->appSecret;
        return $this;
    }

}