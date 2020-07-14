<?php
declare(strict_types = 1);

namespace woodlsy\wechatRest\cgiBin;

use woodlsy\wechatRest\Request;

class Token extends Request
{
    public function __construct()
    {
        $this->queryUrl = '/cgi-bin/token';
        $this->queryParams['grant_type'] = 'client_credential';
    }

}