<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class Commit extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/commit';
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : Commit
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
    public function setTemplateId(string $templateId) : Commit
    {
        $this->params['template_id'] = $templateId;
        return $this;
    }

    /**
     * 设置自定义配置
     *
     * @author yls
     * @param array $extJson
     * @return $this
     */
    public function setExtJson(array $extJson) : Commit
    {
        $this->params['ext_json'] = json_encode($extJson);
        return $this;
    }

    /**
     * 设置版本
     *
     * @author yls
     * @param string $userVersion
     * @return $this
     */
    public function setUserVersion(string $userVersion) : Commit
    {
        $this->params['user_version'] = $userVersion;
        return $this;
    }

    /**
     * 设置简介
     *
     * @author yls
     * @param string $userDesc
     * @return $this
     */
    public function setUserDesc(string $userDesc) : Commit
    {
        $this->params['user_desc'] = $userDesc;
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