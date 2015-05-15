<?php

class Pinterest extends Requests implements ServiceInterface
{

	public function getName()
	{

		return 'pinterest';
	
	}

	public function getRequest( $url )
	{

		$pinteresturl = 'http://api.pinterest.com/v1/urls/count.json?';
		$pinteresturl .= http_build_query( array(
			'callback' => 'receiveCount', 
			'url' => $url
		) );
		return ( $this->createRequest( $pinteresturl ) );
	
	}

	public function extractCount( $data )
	{
		$data= $this->modx->fromJSON( preg_replace("/[^(]*\((.*)\)/", "$1", $data) );
		
		// Answer: receiveCount({"url":"http://google.com","count":11278})
		return $data['count'];
	
	}

}
