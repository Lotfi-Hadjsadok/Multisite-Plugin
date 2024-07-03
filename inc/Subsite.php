<?php
/**
 * Subsite class
 * Gives us access to our subsites data
 */

namespace Inc;

use Inc\Abstracts\Singleton;

class Subsite extends Singleton {
	/**
	 * Subsite domain name.
	 *
	 * @var string
	 */
	public string $domain;


	public function __construct()
	{
		$this->domain = $this->extract_subdomains($_SERVER['HTTP_HOST']);
	}

	/**
	 * Extract domains from sub.domain.com.
	 *
	 * @param string $domain
	 * @return string
	 */
	private function extract_domain( $domain ): string {
		if ( preg_match( '/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $matches ) ) {
			return $matches['domain'];
		} else {
			return $domain;
		}
	}

	/**
	 * Extract Subdomains from domains
	 *
	 * @param string $domain
	 * @return string
	 */
	private function extract_subdomains($domain) : string {
		$subdomain = $domain;
	
		$domain = $this->extract_domain($subdomain);
		
		if($domain){
			$subdomain = rtrim(strstr($subdomain, '.'.$domain, true));
			return $subdomain;
		}else{
			return '';
		}
	
	}
}
