<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\component;

use woodlsy\wechatRest\Request;

class ApiComponentToken extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/component/api_component_token';
    }

    /**
     * 设置票据
     *
     * @author yls
     * @param string $verifyTicket
     * @return $this
     */
    public function setVerifyTicket(string $verifyTicket) : ApiComponentToken
    {
        $this->params['component_verify_ticket'] = $verifyTicket;
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
        $this->params['component_appid']     = $this->appId;
        $this->params['component_appsecret'] = $this->appSecret;
        $this->params = json_encode($this->params);
        return $this;
    }
}