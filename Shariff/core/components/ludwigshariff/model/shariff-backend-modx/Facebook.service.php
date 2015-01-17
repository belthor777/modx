<?php

class Facebook extends Requests implements ServiceInterface
{

	public function getName()
	{

		return 'facebook';
	
	}

	public function getRequest( $url )
	{

		$facebookURL = 'https://api.facebook.com/method/fql.query?';
		$facebookURL .= http_build_query( array(
			'format' => 'json', 
			'query' => 'SELECT total_count FROM link_stat WHERE url="' . $url . '"'
		) );
		return $this->createRequest( $facebookURL );
	
	}

	public function extractCount( $data )
	{

		return ( ( isset( $data[0] ) && isset( $data[0]['total_count'] ) ) ? $data[0]['total_count'] : 0 );
	
	}

}