<?php

class Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Integration extends Pronamic_WP_Pay_Gateways_MultiSafepay_AbstractIntegration {
	public function __construct() {
		$this->id       = 'multisafepay-connect';
		$this->name     = 'MultiSafepay - Connect';
		$this->url      = 'http://www.multisafepay.com/';
		$this->provider = 'multisafepay';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Config';
	}
}
