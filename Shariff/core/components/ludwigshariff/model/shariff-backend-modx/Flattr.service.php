<?php

class Flattr extends Requests implements ServiceInterface
{

    public function getName()
    {
        return 'flattr';
    }

    public function getRequest($url)
    {
        $url = 'https://api.flattr.com/rest/v2/things/lookup/?url='.urlencode($url);
        return $this->createRequest($url);
    }

    public function extractCount($data= array())
    {
    	if ($data['message'] == "not_found")
    	{
    		return 0;
    	}
    	
        return (isset($data['flattrs'])) ? $data['flattrs'] : 0;
    }
}
