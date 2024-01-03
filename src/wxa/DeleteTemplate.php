<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class DeleteTemplate extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/deletetemplate';
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setComponentAccessToken(string $accessToken) : DeleteTemplate
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置模板ID
     *
     * @author yls
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId(string $templateId) : DeleteTemplate
    {
        $this->params['template_id'] = $templateId;
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