<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\component;

use woodlsy\wechatRest\Request;

class ApiCreatePreauthcode extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/component/api_create_preauthcode';
    }

    /**
     * 设置票据
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : ApiCreatePreauthcode
    {
        $this->queryUrl = $this->queryUrl . '?component_access_token=' . $accessToken;
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