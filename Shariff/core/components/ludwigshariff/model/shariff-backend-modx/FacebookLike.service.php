<?php

class FacebookLike extends Requests implements ServiceInterface
{

    public function getName()
    {
        return 'facebooklike';
    }

    public function getRequest($url)
    {
        $facebookURL = 'https://api.facebook.com/method/fql.query?';
        $facebookURL .= http_build_query( array('format' => 'json',
                                                'query'  => 'select like_count from link_stat where url="' . $url . '"') );
        return $this->createRequest($facebookURL);
    }

    public function extractCount($data= array())
    {
            return ( ( isset( $data[0] ) && isset( $data[0]['like_count'] ) ) ? $data[0]['like_count'] : 0 );
    }
}
