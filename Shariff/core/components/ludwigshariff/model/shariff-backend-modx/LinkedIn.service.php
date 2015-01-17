<?php

class LinkedIn extends Requests implements ServiceInterface
{

    public function getName()
    {
        return 'linkedin';
    }

    public function getRequest($url)
    {
        $linkedinURL = 'https://www.linkedin.com/countserv/count/share?';
        $linkedinURL .= http_build_query( array('url'  => $url,
                                                'format' => 'json') );
        return $this->createRequest($linkedinURL);
    }

    public function extractCount($data)
    {
        return $data['count'];
    }
}
