<?php

class Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Integration {
	public function __construct() {
		$this->id       = 'multisafepay-connect';
		$this->name     = 'MultiSafepay - Connect';
		$this->url      = 'http://www.multisafepay.com/';
		$this->provider = 'multisafepay';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_MultiSafepay_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_MultiSafepay_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_Gateway';
	}
}
