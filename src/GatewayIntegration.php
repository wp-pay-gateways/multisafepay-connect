<?php

class Pronamic_WP_Pay_Gateways_MultiSafepay_Connect_GatewayIntegration {
	public function __construct() {
		$this->id = 'multisafepay-connect';
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
