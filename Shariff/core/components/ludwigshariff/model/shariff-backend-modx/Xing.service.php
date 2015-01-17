<?php

class Xing extends Requests implements ServiceInterface
{

	public function getName()
	{

		return 'xing';
	
	}

	public function getRequest( $url )
	{

		$rq_url = 'https://www.xing-share.com/spi/shares/statistics';
		
		return ( $this->createRequest( $rq_url, 'POST', array(
			'url' => $url
		) ) );
	
	}

	public function extractCount( $data )
	{

		return $data['share_counter'];
	
	}

}
