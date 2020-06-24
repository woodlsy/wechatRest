<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest;

use woodlsy\httpClient\HttpCurl;

class Request
{
    const DOMAIN = 'https://api.weixin.qq.com';
    public $queryUrl = null;

    public $params    = null;
    public $appId     = null;
    public $appSecret = null;
    public $queryParams = [];
    public static $lastUrl;
    public static $lastParams;

    /**
     * 设置app id
     *
     * @author yls
     * @param string $appId
     * @return $this
     */
    public function setAppId(string $appId) : Request
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 设置app secret
     *
     * @author yls
     * @param string $appSecret
     * @return $this
     */
    public function setAppSecret(string $appSecret) : Request
    {
        $this->appSecret = $appSecret;
        return $this;
    }

    /**
     * 执行
     *
     * @author yls
     * @param bool $post
     * @return string
     * @throws \woodlsy\httpClient\HttpClientException
     */
    public function exec(bool $post = true) : string
    {
        $url    = self::DOMAIN . $this->queryUrl;
        $client = (new HttpCurl());

        if (!empty($this->queryParams)) {
            $url .= '?' . http_build_query($this->queryParams);
        }

        self::$lastUrl = $url;
        self::$lastParams = $this->params;
        if (true === $post) {
            return $client->setUrl($url)->setData($this->params)->post();
        }

        return $client->setUrl($url)->get();
    }
}