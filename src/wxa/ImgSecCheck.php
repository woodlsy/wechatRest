<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\httpClient\HttpCurl;
use woodlsy\wechatRest\Request;

class ImgSecCheck extends Request
{
    public $imgLocalPath;

    public function __construct()
    {
        $this->queryUrl = '/wxa/img_sec_check';
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
     * 设置图片本地地址
     *
     * @author yls
     * @param string $localPath
     * @return $this
     */
    public function setImgLocalPath(string $localPath) : ImgSecCheck
    {
        $this->imgLocalPath = $localPath;
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
        $fileType = mime_content_type($this->imgLocalPath);
        $data = array('media'=>new \CURLFile(realpath($this->imgLocalPath), $fileType));
        return $client->setUrl($url)->setData($data)->setKeepDataFormat(true)->post();
    }

}