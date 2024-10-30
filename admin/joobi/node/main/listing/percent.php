<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'main.listing.simple' );
class WListing_Corepercent extends WListing_simple {
	public function createHeader() {
				if ( empty( $this->element->align ) ) $this->element->align = 'center';
		return false;
	}
	public function create() {
		$status = parent::create();
		$this->content .= '%';
		return $status;
	}
}