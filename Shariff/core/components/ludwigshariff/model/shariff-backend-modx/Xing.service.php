<?php

class Xing extends Request implements ServiceInterface
{

    public function getName()
    {
        return 'xing';
    }

    public function getRequest($url)
    {
        return ( $this->createRequest('https://www.xing-share.com/spi/shares/statistics', 'POST') );
    }

    public function extractCount($data)
    {
        return $data['share_counter'];
    }
}
