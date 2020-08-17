<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;

class ImgSecCheck extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/wxa/msg_sec_check';
    }

    /**
     * 设置第三方access token
     *
     * @author yls
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken) : ImgSecCheck
    {
        $this->queryParams['access_token'] = $accessToken;
        return $this;
    }

    /**
     * 设置图片
     *
     * @author yls
     * @param string $media
     * @return $this
     */
    public function setMedia(string $media) : ImgSecCheck
    {
        $this->params['media'] = $media;
        return $this;
    }

    /**
     * 获取参数
     *
     * @author yls
     * @return $this
     */
    public function getParams() : ImgSecCheck
    {
        $this->params = json_encode($this->params);
        return $this;
    }

}