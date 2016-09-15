<?php
class OC_Theme {
	private $l;
	function __construct() {
		$this->l = OC_L10N::get('lib');
	}
	/**
	 * Returns the base URL
	 *
	 * @return string URL
	 */
	public function getBaseUrl() {
		return 'http://www.e-merge.co.za/';
	}
	/**
	 * Returns the URL where the sync clients are listed
	 *
	 * @return string URL
	 */
	public function getSyncClientUrl() {
		return 'http://www.e-merge.co.za/';
	}
	/**
	 * Returns the URL to the App Store for the iOS Client
	 *
	 * @return string URL
	 */
	public function getiOSClientUrl() {
		return 'https://itunes.apple.com';
	}
	/**
	 * Returns the URL to Google Play for the Android Client
	 *
	 * @return string URL
	 */
	public function getAndroidClientUrl() {
		return 'https://play.google.com';
	}
	/**
	 * Returns the documentation URL
	 *
	 * @return string URL
	 */
	public function getDocBaseUrl() {
		return 'http://www.e-merge.co.za/';
	}
	/**
	 * Returns the title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return 'E-Merge Cloud';
	}
	/**
	 * Returns the short name of the software
	 *
	 * @return string title
	 */
	public function getName() {
		return 'E-Merge Cloud';
	}
	/**
	 * Returns the short name of the software containing HTML strings
	 *
	 * @return string title
	 */
	public function getHTMLName() {
		return 'E-Merge Cloud';
	}
	/**
	 * Returns entity (e.g. company name) - used for footer, copyright
	 *
	 * @return string entity name
	 */
	public function getEntity() {
		return 'E-Merge';
	}
	/**
	 * Returns slogan
	 *
	 * @return string slogan
	 */
	public function getSlogan() {
		return $this->l->t('Cloud');;
	}
	/**
	 * Returns logo claim
	 *
	 * @return string logo claim
	 */
	public function getLogoClaim() {
		return '';
	}
	/**
	 * Returns short version of the footer
	 *
	 * @return string short footer
	 */
	public function getShortFooter() {
		$footer = '<a href="' . $this->getBaseUrl() . '" target="_blank">' . $this->getEntity() . '</a>' .
			' – ' . $this->getSlogan();
		return $footer;
	}
	/**
	 * Returns long version of the footer
	 *
	 * @return string long footer
	 */
	public function getLongFooter() {
		return $this->getShortFooter();
	}
	/**
	 * Returns mail header color
	 *
	 * @return string
	 */
	public function getMailHeaderColor() {
		return '#f0f0f0';
	}
}
