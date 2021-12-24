<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\wxa;

use woodlsy\wechatRest\Request;
use woodlsy\wechatRest\WechatRestException;

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
     * @throws WechatRestException
     */
    public function setScene(string $scene) : GetWxacodeUnlimit
    {
        if (strlen($scene) > 32) {
            throw new WechatRestException('scene 参数大于32个字符');
        }
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
     * 是否需要透明底色，为 true 时，生成透明底色的小程序
     *
     * @author yls
     * @param bool $bgAline
     * @return $this
     */
    public function isHyaline(bool $bgAline) : GetWxacodeUnlimit
    {
        $this->params['is_hyaline'] = $bgAline;
        return $this;
    }

    /**
     * 二维码的宽度，单位 px，最小 280px，最大 1280px
     *
     * @author yls
     * @param int $width
     * @return $this
     */
    public function width(int $width) : GetWxacodeUnlimit
    {
        $this->params['width'] = $width;
        return $this;
    }

    /**
     * 设置线条颜色
     *
     * @author yls
     * @param bool  $auto 自动配置线条颜色，如果颜色依然是黑色，则说明不建议配置主色调，默认 false
     * @param array $color ['r':0,'g':0,'b':0]
     * @return $this
     */
    public function lineColor(bool $auto, array $color) : GetWxacodeUnlimit
    {
        $this->params['auto_color'] = $auto;
        $this->params['line_color'] = $color;
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
        if (!isset($this->params['width']) || empty($this->params['width'])) {
            $this->params['width'] = 280;
        }
        $this->params = json_encode($this->params);
        return $this;
    }

}