<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class GetWxacodeUnlimit extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/getwxacodeunlimit';
    }

    /**
     * 设置access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : GetWxacodeUnlimit
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置模板ID
     *
     * @author yls
     * @param string $scene
     * @return $this
     */
    public function setScene(string $scene) : GetWxacodeUnlimit
    {
        $this->params['scene'] = $scene;
        return $this;
    }

    /**
     * 设置自定义配置
     *
     * @author yls
     * @param string $page
     * @return $this
     */
    public function setPage(string $page) : GetWxacodeUnlimit
    {
        $this->params['page'] = $page;
        return $this;
    }

    /**
     * 获取参数
     *
     * @author yls
     * @return $this
     */
    public function getParams() : GetWxacodeUnlimit
    {
        $this->params['width'] = 280;
        $this->params = json_encode($this->params);
        return $this;
    }

}