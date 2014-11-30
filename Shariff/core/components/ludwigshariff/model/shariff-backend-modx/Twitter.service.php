<?php

class Twitter extends Requests implements ServiceInterface
{

    public function getName()
    {
        return 'twitter';
    }

    public function getRequest($url)
    {
        $twitterUrl = 'https://cdn.api.twitter.com/1/urls/count.json?url=' . urlencode($url);
        return $this->createRequest($twitterUrl);
    }

    public function extractCount($data)
    {
        return $data['count'];
    }
}
