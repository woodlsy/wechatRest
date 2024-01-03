<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class SubmitAudit extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/submit_audit';
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : SubmitAudit
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置版本和描述
     *
     * @author yls
     * @param string $versionDesc
     * @return $this
     */
    public function setVersionDesc(string $versionDesc) : SubmitAudit
    {
        $this->params['version_desc'] = $versionDesc;
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
        $this->params = json_encode($this->params);
        return $this;
    }

}